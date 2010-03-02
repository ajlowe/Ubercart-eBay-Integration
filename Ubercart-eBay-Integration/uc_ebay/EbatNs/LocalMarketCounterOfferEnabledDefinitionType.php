<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates whether counter offers are allowed on best offers for this 
 * category.Returned only if this category overrides the site default.Added for 
 * Local Market users. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LocalMarketCounterOfferEnabledDefinitionType.html
 *
 */
class LocalMarketCounterOfferEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LocalMarketCounterOfferEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>