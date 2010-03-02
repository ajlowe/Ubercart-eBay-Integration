<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Indicates the success or failure of the attempt to add text to the end of 
 * thedescription section of an item listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddToItemDescriptionResponseType.html
 *
 */
class AddToItemDescriptionResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddToItemDescriptionResponseType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>