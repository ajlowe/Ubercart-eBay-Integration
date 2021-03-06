<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'TaskStatusCodeType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns the store category structure update status, when a prior 
 * SetStoreCategories call was processed asynchronously. If a SetStoreCategories 
 * request affects many listings, then the category structure changes will be 
 * processed asynchronously. If not many listings are affected by category 
 * structure changes, the status is returned in the SetStoreCategories response. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetStoreCategoryUpdateStatusResponseType.html
 *
 */
class GetStoreCategoryUpdateStatusResponseType extends AbstractResponseType
{
	/**
	 * @var TaskStatusCodeType
	 */
	protected $Status;

	/**
	 * @return TaskStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param TaskStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetStoreCategoryUpdateStatusResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Status' =>
				array(
					'required' => false,
					'type' => 'TaskStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
