<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'ItemType.php';
require_once 'AbstractRequestType.php';

/**
 * Enables a seller to take a single item (or a single multi-itemlisting) that 
 * ended without bidders or buyers and re-list it on aspecified eBay site. The 
 * listing may be re-listed with the same itemproperties as the original or the 
 * seller may change a number of theitem's defining properties at re-listing time. 
 * The new listing willhave a different item ID than the original one. RelistItem 
 * re-lists asingle item (or a single multi-item listing) that has already ended.To 
 * re-list multiple items (multiple listings) that have ended,execute RelistItem 
 * once for each ended listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RelistItemRequestType.html
 *
 */
class RelistItemRequestType extends AbstractRequestType
{
	/**
	 * @var ItemType
	 */
	protected $Item;
	/**
	 * @var string
	 */
	protected $DeletedField;

	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getDeletedField($index = null)
	{
		if ($index !== null) {
			return $this->DeletedField[$index];
		} else {
			return $this->DeletedField;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setDeletedField($value, $index = null)
	{
		if ($index !== null) {
			$this->DeletedField[$index] = $value;
		} else {
			$this->DeletedField = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addDeletedField($value)
	{
		$this->DeletedField[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RelistItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeletedField' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
