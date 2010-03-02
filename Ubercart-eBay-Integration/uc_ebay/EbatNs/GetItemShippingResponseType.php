<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'ShippingDetailsType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains the data returned by the call. The shipping details for the 
 * specifieditem are returned in a ShippingDetails object. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemShippingResponseType.html
 *
 */
class GetItemShippingResponseType extends AbstractResponseType
{
	/**
	 * @var ShippingDetailsType
	 */
	protected $ShippingDetails;

	/**
	 * @return ShippingDetailsType
	 */
	function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * @return void
	 * @param ShippingDetailsType $value 
	 */
	function setShippingDetails($value)
	{
		$this->ShippingDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetItemShippingResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ShippingDetails' =>
				array(
					'required' => false,
					'type' => 'ShippingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>