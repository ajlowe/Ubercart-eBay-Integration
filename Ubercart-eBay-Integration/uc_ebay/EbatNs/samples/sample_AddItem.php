<?php
/**
 * sources
 */
echo 'Hello';
require_once './setincludepath.php';
require_once 'AddItemRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_AddItem
 * 
 * Sample call for AddItem
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_AddItem.php,v 1.2 2008/06/30 12:50:01 michael Exp $
 * @access public 
 */
class sample_AddItem extends EbatNs_Environment
{
	/**
     * sample_AddItem::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $a = new ShippingServiceOptionsType();
	$a->setShippingService('UPS2ndDay');
	$a->setShippingServicePriority('1');
	$a->setShippingServiceCost('5');
        $b = new ShippingDetailsType();
        //print '<pre>'.print_r(get_class_methods($b),true).'</pre><br>';
	$b->setShippingServiceOptions($a);
	//$b->setDefaultShippingCost(5);
	$b->setShippingType('Flat');
	$req = new AddItemRequestType();

        $item = new ItemType();
        $item->setTitle($params['Title']);
        $item->setQuantity($params['Quantity']);
        $item->setCurrency($params['Currency']);
        $item->setCountry($params['Country']);
        $item->setStartPrice($params['StartPrice']);
        $item->setListingDuration($params['ListingDuration']);
        $item->setLocation($params['Location']);
        $item->setPaymentMethods($params['PaymentMethods']);
        $item->setListingType($params['ListingType']);
        $item->setDescription($params['Description']);
	$item->ShippingService = 'UPS Ground';
	$item->setShippingDetails($b);
        //print '<pre>'.print_r(get_class_methods($a),true).'</pre><br>';
	//$this->dumpObject($a);
	//$this->dumpObject($item);
        
        $primaryCategory = new CategoryType();
        $primaryCategory->setCategoryID($params['CategoryID']);
        $item->setPrimaryCategory($primaryCategory);
		
        $req->setItem($item);
        
        $res = $this->proxy->AddItem($req);
            $this->dumpObject($res);
        if ($this->testValid($res))
        {
            $this->dumpObject($res);
            return (true);
        }
        else 
        {
            return (false);
        }
    }
}

$x = new sample_AddItem();

$x->dispatchCall
(
	array
	(
		'Title' => 'Prima iPod',
		'Quantity' => '1',
		'Currency' => 'USD',
		'Country' => 'US',
		'StartPrice' => '5.00',
		'ListingDuration' => 'Days_7',
		'Location' => 'Louisville',
		'PaymentMethods' => 'VisaMC',
		'ListingType' => 'Chinese',
		'Description' => 'Enter Description Here',
		'CategoryID' => '164',
		'ShippingService' => 'UPS Ground',
	)
);

?>
