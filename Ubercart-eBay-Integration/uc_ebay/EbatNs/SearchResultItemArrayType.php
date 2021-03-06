<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SearchResultItemType.php';

/**
 * Container for a list of search result items, such as returned 
 * byGetSearchResults. Will contain zero, one, or multipleSearchResultItemType 
 * items, each of which represents one item listingthat was found by the search. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchResultItemArrayType.html
 *
 */
class SearchResultItemArrayType extends EbatNs_ComplexType
{
	/**
	 * @var SearchResultItemType
	 */
	protected $SearchResultItem;

	/**
	 * @return SearchResultItemType
	 * @param integer $index 
	 */
	function getSearchResultItem($index = null)
	{
		if ($index !== null) {
			return $this->SearchResultItem[$index];
		} else {
			return $this->SearchResultItem;
		}
	}
	/**
	 * @return void
	 * @param SearchResultItemType $value 
	 * @param  $index 
	 */
	function setSearchResultItem($value, $index = null)
	{
		if ($index !== null) {
			$this->SearchResultItem[$index] = $value;
		} else {
			$this->SearchResultItem = $value;
		}
	}
	/**
	 * @return void
	 * @param SearchResultItemType $value 
	 */
	function addSearchResultItem($value)
	{
		$this->SearchResultItem[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchResultItemArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SearchResultItem' =>
				array(
					'required' => false,
					'type' => 'SearchResultItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
