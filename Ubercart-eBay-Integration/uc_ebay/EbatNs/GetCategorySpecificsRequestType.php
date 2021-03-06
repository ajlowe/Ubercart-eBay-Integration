<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Item Specifics are typical aspects of items in the same category.They enable 
 * users to classify items by presenting descriptive detailsin a structured way. 
 * For example, in a jewelry category, you mightdescribe a locket using 
 * "Gemstone=Amber", but in aWashers & Dryers category, you might use 
 * "Type=Top-Loading" instead.</p><p>GetCategorySpecifics returns the most popular 
 * Item Specific names and valuesfor each leaf category you request. (eBay 
 * determines the popularity based onseveral factors, such as the number of recent 
 * listings and/orrecently sold listings in the same category that have used the 
 * same nameor value.)</p><p>When you are listing an item, we recommend that you 
 * consider using thesepopular names and values in your Item Specifics, because 
 * standard termscan help buyers (and comparison shopping tools) understand the 
 * detailsof your item more easily.Also these names and values are more likely to 
 * be indexed fortitle and description searches in the future.If you don't see a 
 * name or value you need, you can add your own in yourlisting request. (If that 
 * name or value becomes popular, it may berecommended in these results over 
 * time.)</p><p>See ItemSpecificsEnabled in GetCategoryFeatures to determine 
 * whichcategories support listing with custom Item Specifics.</p> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategorySpecificsRequestType.html
 *
 */
class GetCategorySpecificsRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var dateTime
	 */
	protected $LastUpdateTime;
	/**
	 * @var int
	 */
	protected $MaxNames;
	/**
	 * @var int
	 */
	protected $MaxValuesPerName;
	/**
	 * @var string
	 */
	protected $Name;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getCategoryID($index = null)
	{
		if ($index !== null) {
			return $this->CategoryID[$index];
		} else {
			return $this->CategoryID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setCategoryID($value, $index = null)
	{
		if ($index !== null) {
			$this->CategoryID[$index] = $value;
		} else {
			$this->CategoryID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addCategoryID($value)
	{
		$this->CategoryID[] = $value;
	}
	/**
	 * @return dateTime
	 */
	function getLastUpdateTime()
	{
		return $this->LastUpdateTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setLastUpdateTime($value)
	{
		$this->LastUpdateTime = $value;
	}
	/**
	 * @return int
	 */
	function getMaxNames()
	{
		return $this->MaxNames;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxNames($value)
	{
		$this->MaxNames = $value;
	}
	/**
	 * @return int
	 */
	function getMaxValuesPerName()
	{
		return $this->MaxValuesPerName;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxValuesPerName($value)
	{
		$this->MaxValuesPerName = $value;
	}
	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategorySpecificsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'LastUpdateTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxNames' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxValuesPerName' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
