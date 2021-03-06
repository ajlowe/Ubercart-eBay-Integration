<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'CategoryType.php';

/**
 * Defines a suggested category, returned in response to a search for categories 
 * that contain listings with certain keywords in their titles and descriptions. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SuggestedCategoryType.html
 *
 */
class SuggestedCategoryType extends EbatNs_ComplexType
{
	/**
	 * @var CategoryType
	 */
	protected $Category;
	/**
	 * @var int
	 */
	protected $PercentItemFound;

	/**
	 * @return CategoryType
	 */
	function getCategory()
	{
		return $this->Category;
	}
	/**
	 * @return void
	 * @param CategoryType $value 
	 */
	function setCategory($value)
	{
		$this->Category = $value;
	}
	/**
	 * @return int
	 */
	function getPercentItemFound()
	{
		return $this->PercentItemFound;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPercentItemFound($value)
	{
		$this->PercentItemFound = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SuggestedCategoryType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Category' =>
				array(
					'required' => false,
					'type' => 'CategoryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PercentItemFound' =>
				array(
					'required' => true,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				)
			));

	}
}
?>
