<?php
// $Id$

/**
 * @file
 * eBay Platform Notifications handlers.
 */

function uc_ebay_platform_notifications() {
  $output = '';

  $path = drupal_get_path('module', 'uc_ebay');
  require_once $path .'/EbatNs/EbatNs_NotificationClient.php';
  $handler = new EbatNs_NotificationClient('EbatNs_DataConverterUtf8');
  $msg = file_get_contents('php://input');
  $output = check_plain($msg);
  $res = $handler->getResponse($msg);

  watchdog('uc_ebay', '!msg', array('!msg' => check_plain($msg)), WATCHDOG_DEBUG);
  uc_debug(9, '<pre>'. print_r($res, TRUE) .'</pre>');

  if ($res->getAck() != 'Failure') {
    if (uc_ebay_validate_notification($res)) {
      uc_debug(9, 'Validated');
      switch (get_class($res)) {
        case 'GetItemTransactionsResponseType':
          uc_debug(9, 'GetItemTransactionResponseType');
          uc_ebay_record_transaction($res);
          break;
        default:
          break;
      }
    }
  }

  return $output;
}

function uc_ebay_record_transaction($res) {
  uc_debug(9, '<pre>$res => '. print_r($res, TRUE) .'</pre>');
  $item = $res->getItem();
  $transactions = $res->getTransactionArray();
  $transaction = $transactions[0];
  uc_debug(9, '<pre>$item => '. print_r($item, TRUE) .'</pre>');
  uc_debug(9, '<pre>$transaction => '. print_r($transaction, TRUE) .'</pre>');
//return;
  $buyer = $transaction->getBuyer();
  uc_debug(9, '<pre>$buyer => '. print_r($buyer, TRUE) .'</pre>');
  // Check for an existing user account with the e-mail address from checkout.
  $result = db_query("SELECT uid FROM {users} WHERE mail = '%s'", $buyer->getEmail());

  // If it was found, do not create a new user.
  if ($account = db_fetch_object($result)) {
    $account = user_load($account->uid);

    $order = uc_ebay_order_find_existing($transaction, $account);
    if ($order) {
      uc_ebay_order_product_add($order, $item, $transaction);
    }
    else {
      $order = uc_ebay_order_create_new($item, $transaction, $account);
    }
  }
  else {
    $account = uc_ebay_user_create_new($buyer);

    $order = uc_ebay_order_create_new($item, $transaction, $account);
  }

  uc_debug(9, '<pre>$account => '. print_r($account, TRUE) .'</pre>');
  uc_debug(9, '<pre>$order => '. print_r($order, TRUE) .'</pre>');

  uc_order_save($order);
}

function uc_ebay_user_create_new($buyer) {
  // Get a valid new username.
  if ($buyer->getUserID()) {
    $name = $buyer->getUserID();
  }
  else {
    $name = uc_store_email_to_username($buyer->getEmail());
  }

  // Setup the account fields array and save it as a new user.
  $fields = array(
    'name' => $name,
    'mail' => $buyer->getEmail(),
    'init' => $buyer->getEmail(),
    'pass' => user_password(variable_get('uc_pwd_length', 6)),
    'roles' => array(),
    'status' => variable_get('uc_new_customer_status_active', TRUE) ? 1 : 0,
  );
  $account = user_save('', $fields);

  // Send the customer their account details if enabled.
  if (variable_get('uc_new_customer_email', TRUE)) {
    // Manually set the password so it appears in the e-mail.
    $account->password = $fields['pass'];

    // Send the e-mail through the user module.
    drupal_mail('user', 'register_no_approval_required', $buyer->getEmail(), NULL, array('account' => $account), uc_store_email_from());

    unset($account->password);
  }

  return $account;
}

function uc_ebay_order_create_new($item, $transaction, $account) {
  $order = uc_order_new($account->uid, 'post_checkout');

  $buyer = $transaction->getBuyer();
  $address = $buyer->getBuyerInfo()->getShippingAddress();
  list($first_name, $last_name) = explode(' ', $address->getName(), 2);
  $order->delivery_first_name = $first_name;
  $order->delivery_last_name = empty($last_name) ? '' : $last_name;
  $order->delivery_phone = $address->getPhone();
  $order->delivery_company = '';
  $order->delivery_street1 = $address->getStreet1();
  $order->delivery_street2 = $address->getStreet2();
  $order->delivery_city = $address->getCityName();
  $country = uc_get_country_data(array('country_iso_code_2' => $address->getCountry()));
  $country_id = $country[0]['country_id'];
  $order->delivery_country = $country_id;
  $zone_id = db_result(db_query("SELECT zone_id FROM {uc_zones} WHERE (zone_code = '%s' OR zone_name = '%s') AND zone_country_id = %d", $address->getStateOrProvince(), $address->getStateOrProvince(), $country_id));
  $order->delivery_zone = $zone_id;
  $order->delivery_postal_code = $address->getPostalCode();
  $order->payment_method = 'paypal_wps';

  uc_ebay_order_product_add($order, $item, $transaction);

  return $order;
}

function uc_ebay_order_find_existing($transaction, $account) {
  $buyer = $transaction->getBuyer();
  $address = $buyer->getBuyerInfo()->getShippingAddress();

  $country = uc_get_country_data(array('country_iso_code_2' => $address->getCountry()));
  $country_id = $country[0]['country_id'];

  $zone_id = db_result(db_query("SELECT zone_id FROM {uc_zones} WHERE (zone_code = '%s' OR zone_name = '%s') AND zone_country_id = %d", $address->getStateOrProvince(), $address->getStateOrProvince(), $country_id));

  // Preemptive D7 syntax, because this query is rather gnarly.
  $args = array(
    ':uid' => $account->uid,
    ':street1' => $address->getStreet1(),
    ':street2' => $address->getStreet2(),
    ':city' => $address->getCityName(),
    ':country' => $country_id,
    ':zone' => $zone_id,
    ':postal_code' => $address->getPostalCode(),
    ':order_status' => 'pending',
    ':modified' => time() - 172800, // Two days ago.
  );

  $result = db_query("SELECT order_id FROM {uc_orders} WHERE uid = %d AND delivery_street1 = '%s' AND delivery_street2 = '%s' AND delivery_city = '%s' AND delivery_country = %d AND delivery_zone = %d AND delivery_postal_code = '%s' AND order_status = '%s' AND modified > %d ORDER BY order_id DESC", $args);
  if ($order_id = db_result($result)) {
    return uc_order_load($order_id);
  }
  else {
    return FALSE;
  }
}

function uc_ebay_order_product_add($order, $item, $transaction) {
  $qty = $transaction->getQuantityPurchased();
  $values = array('qty' => $qty);

  $sku = $item->getSKU();

  if ($sku) {
    // Search attribute adjustments first.
    $result = db_query("SELECT nid, combination FROM {uc_product_adjustments} WHERE model = '%s'", $sku);

    if ($adjustment = db_fetch_object($result)) {
      $nid = $adjustment->nid;
      $values['attributes'] = unserialize($adjustment->combination);
    }
    else {
      // Search main products table.
      $nid = db_result(db_query("SELECT n.nid FROM {uc_products} AS p JOIN {node} AS n ON p.vid = n.vid WHERE model = '%s'", $sku));
    }
  }

  if (!$nid) {
    // Search old AuctionBlox table.
    db_set_active('vittitow_catalog');

    $nid = db_result(db_query("SELECT app_data AS nid FROM abx_listings WHERE ext_id = '%s'", $item->getItemID()));

    db_set_active('default');
  }

  $values['nid'] = $nid;

  $product = node_load($nid);
  $product->data = module_invoke_all('add_to_cart_data', $values);

  foreach (module_list() as $module) {
    $function = $module .'_cart_item';
    if (function_exists($function)) {
      // $product must be passed by reference.
      $function('load', $product);
    }
  }

  if (!$nid) {
    $product->title = $item->getTitle();
    $product->data['shippable'] = '1';
  }
  $product->data['uc_ebay'] = array(
    'item_id' => $item->getItemID(),
    'transaction_id' => $transaction->getTransactionID(),
    'view_url' => $item->getListingDetails()->getViewItemURL(),
  );

  $product->qty = $qty;
  $product->price = $item->getSellingStatus()->getCurrentPrice()->getTypeValue();

  $order->products[] = $product;

  if (variable_get('uc_order_logging', TRUE)) {
    uc_order_log_changes($order->order_id, array('add' => 'Added ('. $product->qty .') '. $product->title .' to order.'));
  }

  // Decrement stock?
  if (module_exists('uc_stock')) {
    uc_stock_decrement_product_stock($product, 0, $order);
  }

  if (($count = uc_order_get_product_count($order)) !== $order->product_count) {
    db_query("UPDATE {uc_orders} SET product_count = %d WHERE order_id = %d", $count, $order->order_id);
    $order->product_count = $count;
  }

  $buyer = $transaction->getBuyer();

  $order->data['uc_ebay'] = array(
    'buyer_id' => $buyer->getUserID(),
  );

  uc_ebay_order_shipping_add($order, $item, $transaction);
}

function uc_ebay_order_shipping_add($order, $item, $transaction) {
  $shipping_service = $transaction->getShippingServiceSelected();

  $new_shipping = TRUE;
  foreach ($order->line_items as $line_item) {
    if ($line_item->title == $shipping_service->getShippingService()) {
      uc_order_update_line_item($line_item->line_item_id, $line_item->title, $line_item->amount + $shipping_service->getShippingServiceCost()->getTypeValue());
      $new_shipping = FALSE;
      break;
    }
  }
  if ($new_shipping) {
    uc_order_line_item_add($order->order_id, 'shipping', $shipping_service->getShippingService(), $shipping_service->getShippingServiceCost()->getTypeValue());
  }

  // Invoke hook_order() in enabled modules.
  foreach (module_implements('order') as $module) {
    $func = $module .'_order';
    $null = NULL;
    $func('load', $order, $null);
  }

  // Load line items... has to be last after everything has been loaded.
  $order->line_items = uc_order_load_line_items($order, TRUE);

  // Merge it with the defaultish line items.
  $order->line_items = array_merge($order->line_items, uc_order_load_line_items($order, FALSE));
  usort($order->line_items, 'uc_weight_sort');

  // Make sure the total still matches up...
  if (($total = uc_order_get_total($order)) !== $order->order_total) {
    db_query("UPDATE {uc_orders} SET order_total = %f WHERE order_id = %d", $total, $order->order_id);
    $order->order_total = $total;
  }
}

