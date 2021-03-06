<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * This type defines the PaisaPayEscrow payment feature. If the field is present, 
 * the PaisaPayEscrow payment feature applies to the category. The field is 
 * returned as an empty element, the boolean value is not returned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaisaPayFullEscrowEnabledDefinitionType.html
 *
 */
class PaisaPayFullEscrowEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaisaPayFullEscrowEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>
