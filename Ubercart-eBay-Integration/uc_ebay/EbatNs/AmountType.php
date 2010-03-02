<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Basic type for specifying monetary amounts. A double value (e.g.,1.00 or 1.0) is 
 * meaningful as a monetary amount when accompanied by aspecification of the 
 * currency, in which case the value specifiesthe amount in that currency. An 
 * AmountType expresses both the value(a double) and the currency. Details such as 
 * prices, fees, costs,and payments are specified as amount types. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AmountType.html
 *
 */
class AmountType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AmountType', 'urn:ebay:apis:eBLBaseComponents');
	$this->_attributes = array_merge($this->_attributes,
		array(
			'currencyID' =>
			array(
				'name' => 'currencyID',
				'type' => 'CurrencyCodeType',
				'use' => 'required'
			)
		));

	}
}
?>