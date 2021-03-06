<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'ListingTipArrayType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Contains results returned from the Listing Analyzer recommendation engine. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingAnalyzerRecommendationsType.html
 *
 */
class ListingAnalyzerRecommendationsType extends EbatNs_ComplexType
{
	/**
	 * @var ListingTipArrayType
	 */
	protected $ListingTipArray;

	/**
	 * @return ListingTipArrayType
	 */
	function getListingTipArray()
	{
		return $this->ListingTipArray;
	}
	/**
	 * @return void
	 * @param ListingTipArrayType $value 
	 */
	function setListingTipArray($value)
	{
		$this->ListingTipArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingAnalyzerRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ListingTipArray' =>
				array(
					'required' => false,
					'type' => 'ListingTipArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
