<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Specifies the details of policy violations if the item was administratively 
 * canceled.The details are the policy ID and the policy text. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemPolicyViolationType.html
 *
 */
class ItemPolicyViolationType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $PolicyID;
	/**
	 * @var string
	 */
	protected $PolicyText;

	/**
	 * @return long
	 */
	function getPolicyID()
	{
		return $this->PolicyID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setPolicyID($value)
	{
		$this->PolicyID = $value;
	}
	/**
	 * @return string
	 */
	function getPolicyText()
	{
		return $this->PolicyText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPolicyText($value)
	{
		$this->PolicyText = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemPolicyViolationType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PolicyID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PolicyText' =>
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