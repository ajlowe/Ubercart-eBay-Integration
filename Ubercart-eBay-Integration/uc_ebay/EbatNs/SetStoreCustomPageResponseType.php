<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'StoreCustomPageType.php';

/**
 * Returned after calling SetStoreCustomPageRequest. This serves as confirmation 
 * that the custom page was successfully submitted. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetStoreCustomPageResponseType.html
 *
 */
class SetStoreCustomPageResponseType extends AbstractResponseType
{
	/**
	 * @var StoreCustomPageType
	 */
	protected $CustomPage;

	/**
	 * @return StoreCustomPageType
	 */
	function getCustomPage()
	{
		return $this->CustomPage;
	}
	/**
	 * @return void
	 * @param StoreCustomPageType $value 
	 */
	function setCustomPage($value)
	{
		$this->CustomPage = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetStoreCustomPageResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CustomPage' =>
				array(
					'required' => false,
					'type' => 'StoreCustomPageType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
