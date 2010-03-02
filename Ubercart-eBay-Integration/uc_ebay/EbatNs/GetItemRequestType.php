<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Requests data for a specific item identified by item ID. Use noDetailLevel to 
 * return all item fields without Item.Description.Use a DetailLevel of ReturnAll 
 * to return all item fields. SeeGetItem in the eBay Web Services Guide for more 
 * information.If a listing ended more than 90 days ago, its title,price, and other 
 * item information are not returned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemRequestType.html
 *
 */
class GetItemRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var boolean
	 */
	protected $IncludeExpressRequirements;
	/**
	 * @var boolean
	 */
	protected $IncludeWatchCount;
	/**
	 * @var boolean
	 */
	protected $IncludeCrossPromotion;
	/**
	 * @var boolean
	 */
	protected $IncludeItemSpecifics;
	/**
	 * @var boolean
	 */
	protected $IncludeTaxTable;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeExpressRequirements()
	{
		return $this->IncludeExpressRequirements;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeExpressRequirements($value)
	{
		$this->IncludeExpressRequirements = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeWatchCount()
	{
		return $this->IncludeWatchCount;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeWatchCount($value)
	{
		$this->IncludeWatchCount = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeCrossPromotion()
	{
		return $this->IncludeCrossPromotion;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeCrossPromotion($value)
	{
		$this->IncludeCrossPromotion = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeItemSpecifics()
	{
		return $this->IncludeItemSpecifics;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeItemSpecifics($value)
	{
		$this->IncludeItemSpecifics = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeTaxTable()
	{
		return $this->IncludeTaxTable;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeTaxTable($value)
	{
		$this->IncludeTaxTable = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeExpressRequirements' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeWatchCount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeCrossPromotion' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeItemSpecifics' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeTaxTable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>