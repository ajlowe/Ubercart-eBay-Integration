<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Adds one or more items to the user's My eBay watch list. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddToWatchListRequestType.html
 *
 */
class AddToWatchListRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;

	/**
	 * @return ItemIDType
	 * @param integer $index 
	 */
	function getItemID($index = null)
	{
		if ($index !== null) {
			return $this->ItemID[$index];
		} else {
			return $this->ItemID;
		}
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 * @param  $index 
	 */
	function setItemID($value, $index = null)
	{
		if ($index !== null) {
			$this->ItemID[$index] = $value;
		} else {
			$this->ItemID = $value;
		}
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function addItemID($value)
	{
		$this->ItemID[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddToWatchListRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>