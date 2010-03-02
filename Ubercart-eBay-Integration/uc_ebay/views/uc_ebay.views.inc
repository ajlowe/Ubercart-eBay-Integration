<?php
// $$

/**
 * @file
 * Views 2 hooks and callback registries.
 */

/**
 * Implementation of hook_views_data()
 */
function uc_ebay_views_data() {
$data = array(
  'uc_ebay_product' => array(
    'table' => array(
      'join' => array(
        'uc_products' => array(
          'left_field' => 'vid',
          'field' => 'pid',
        ),
        'node' => array(
          'left_field' => 'vid',
          'field' => 'vid',
        ),
        'node_revisions' => array(
          'left_field' => 'vid',
          'field' => 'vid',
        ),
      ),
      'group' => 'eBay',      
    ),
    'pid' => array(
      'title' => t('Pid'),
      'help' => t('The node ID of the Ubercart product this eBay product points to.'), // The help that appears on the UI,
      // Information for displaying the nid
      'field' => array(
        'handler' => 'views_handler_field_node',
        'click sortable' => TRUE,
      ),
      // Information for accepting a nid as an argument
      'argument' => array(
        'handler' => 'views_handler_argument_node_nid',
        'name field' => 'title', // the field to display in the summary.
        'numeric' => TRUE,
        'validate type' => 'nid',
      ),
      // Information for accepting a nid as a filter
      'filter' => array(
        'handler' => 'views_handler_filter_numeric',
      ),
      // Information for sorting on a nid.
      'sort' => array(
        'handler' => 'views_handler_sort',
      ),
      'relationship' => array(
        'title' => t('Related eBay Products'),
        'help' => t('eBay products linked to this product.'),
        'base' => 'node',
        'base field' => 'vid',
        'handler' => 'views_handler_relationship',
        'label' => t('Related eBay Products'),
      ),
    ),
  ),
);
  return $data;
}


/*
$view = new view;
$view->name = 'uc_ebay_products_linked_to_this_node';
$view->description = 'Displays all eBay products linked to this Ubercart product';
$view->tag = '';
$view->view_php = '';
$view->base_table = 'node';
$view->is_cacheable = FALSE;
$view->api_version = 2;
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
/*$handler = $view->new_display('default', 'Defaults', 'default');
$handler->override_option('fields', array(
  'title' => array(
    'id' => 'title',
    'table' => 'node',
    'field' => 'title',
  ),
  'type' => array(
    'id' => 'type',
    'table' => 'node',
    'field' => 'type',
  ),
  'view_node' => array(
    'id' => 'view_node',
    'table' => 'node',
    'field' => 'view_node',
  ),
  'edit_node' => array(
    'label' => 'Edit link',
    'text' => '',
    'exclude' => 0,
    'id' => 'edit_node',
    'table' => 'node',
    'field' => 'edit_node',
    'relationship' => 'none',
  ),
  'pid' => array(
    'label' => 'Links to Product',
    'link_to_node' => 1,
    'exclude' => 0,
    'id' => 'pid',
    'table' => 'uc_ebay_product',
    'field' => 'pid',
    'relationship' => 'none',
  ),
));
$handler->override_option('sorts', array(
  'pid' => array(
    'id' => 'pid',
    'table' => 'uc_ebay_product',
    'field' => 'pid',
  ),
));
$handler->override_option('arguments', array(
  'pid' => array(
    'default_action' => 'ignore',
    'style_plugin' => 'default_summary',
    'style_options' => array(),
    'wildcard' => 'all',
    'wildcard_substitution' => 'All',
    'title' => '',
    'default_argument_type' => 'fixed',
    'default_argument' => '',
    'validate_type' => 'numeric',
    'validate_fail' => 'ignore',
    'break_phrase' => 1,
    'not' => 0,
    'id' => 'pid',
    'table' => 'uc_ebay_product',
    'field' => 'pid',
    'relationship' => 'none',
    'default_options_div_prefix' => '',
    'default_argument_user' => 0,
    'default_argument_fixed' => '',
    'default_argument_php' => '',
    'validate_argument_node_type' => array(
      'uc_ebay_product' => 0,
      'product' => 0,
      'product_kit' => 0,
      'page' => 0,
      'story' => 0,
    ),
    'validate_argument_node_access' => 0,
    'validate_argument_nid_type' => 'nid',
    'validate_argument_vocabulary' => array(
      '39' => 0,
    ),
    'validate_argument_type' => 'tid',
    'validate_argument_php' => '',
  ),
));
$handler->override_option('filters', array(
  'type' => array(
    'operator' => 'in',
    'value' => array(
      'uc_ebay_product' => 'uc_ebay_product',
    ),
    'group' => '0',
    'exposed' => FALSE,
    'expose' => array(
      'operator' => FALSE,
      'label' => '',
    ),
    'id' => 'type',
    'table' => 'node',
    'field' => 'type',
    'relationship' => 'none',
  ),
));
$handler->override_option('access', array(
  'type' => 'none',
));
$handler->override_option('use_ajax', TRUE);
$handler->override_option('style_plugin', 'table');
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->override_option('path', 'test');
$handler->override_option('menu', array(
  'type' => 'normal',
  'title' => 'test',
  'weight' => '0',
  'name' => 'navigation',
));
$handler->override_option('tab_options', array(
  'type' => 'none',
  'title' => '',
  'weight' => 0,
));
/*$data['node']['nid'] = array(
  'title' => t('Nid'),
  'help' => t('The node ID of the node.'), // The help that appears on the UI,
  // Information for displaying the nid
  'field' => array(
    'handler' => 'views_handler_field_node',
    'click sortable' => TRUE,
  ),
  // Information for accepting a nid as an argument
  'argument' => array(
    'handler' => 'views_handler_argument_node_nid',
    'name field' => 'title', // the field to display in the summary.
    'numeric' => TRUE,
    'validate type' => 'nid',
  ),
  // Information for accepting a nid as a filter
  'filter' => array(
    'handler' => 'views_handler_filter_numeric',
  ),
  // Information for sorting on a nid.
  'sort' => array(
    'handler' => 'views_handler_sort',
  ),
);
*/

