<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'PromotionalSaleArrayType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains information about promotional sales. This callis part of the 
 * Promotional Price Display feature. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPromotionalSaleDetailsResponseType.html
 *
 */
class GetPromotionalSaleDetailsResponseType extends AbstractResponseType
{
	/**
	 * @var PromotionalSaleArrayType
	 */
	protected $PromotionalSaleDetails;

	/**
	 * @return PromotionalSaleArrayType
	 */
	function getPromotionalSaleDetails()
	{
		return $this->PromotionalSaleDetails;
	}
	/**
	 * @return void
	 * @param PromotionalSaleArrayType $value 
	 */
	function setPromotionalSaleDetails($value)
	{
		$this->PromotionalSaleDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPromotionalSaleDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PromotionalSaleDetails' =>
				array(
					'required' => false,
					'type' => 'PromotionalSaleArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
