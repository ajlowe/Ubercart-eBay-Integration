<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'PromotionItemPriceTypeCodeType.php';
require_once 'AmountType.php';

/**
 * Contains information about a promoted item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionDetailsType.html
 *
 */
class PromotionDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $PromotionPrice;
	/**
	 * @var PromotionItemPriceTypeCodeType
	 */
	protected $PromotionPriceType;
	/**
	 * @var int
	 */
	protected $BidCount;
	/**
	 * @var AmountType
	 */
	protected $ConvertedPromotionPrice;

	/**
	 * @return AmountType
	 */
	function getPromotionPrice()
	{
		return $this->PromotionPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setPromotionPrice($value)
	{
		$this->PromotionPrice = $value;
	}
	/**
	 * @return PromotionItemPriceTypeCodeType
	 */
	function getPromotionPriceType()
	{
		return $this->PromotionPriceType;
	}
	/**
	 * @return void
	 * @param PromotionItemPriceTypeCodeType $value 
	 */
	function setPromotionPriceType($value)
	{
		$this->PromotionPriceType = $value;
	}
	/**
	 * @return int
	 */
	function getBidCount()
	{
		return $this->BidCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBidCount($value)
	{
		$this->BidCount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getConvertedPromotionPrice()
	{
		return $this->ConvertedPromotionPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedPromotionPrice($value)
	{
		$this->ConvertedPromotionPrice = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PromotionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionPriceType' =>
				array(
					'required' => false,
					'type' => 'PromotionItemPriceTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedPromotionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
