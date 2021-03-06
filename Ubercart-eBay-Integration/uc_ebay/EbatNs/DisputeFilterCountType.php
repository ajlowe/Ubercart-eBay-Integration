<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'DisputeFilterTypeCodeType.php';

/**
 * The number of disputes that match a given filter. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeFilterCountType.html
 *
 */
class DisputeFilterCountType extends EbatNs_ComplexType
{
	/**
	 * @var DisputeFilterTypeCodeType
	 */
	protected $DisputeFilterType;
	/**
	 * @var int
	 */
	protected $TotalAvailable;

	/**
	 * @return DisputeFilterTypeCodeType
	 */
	function getDisputeFilterType()
	{
		return $this->DisputeFilterType;
	}
	/**
	 * @return void
	 * @param DisputeFilterTypeCodeType $value 
	 */
	function setDisputeFilterType($value)
	{
		$this->DisputeFilterType = $value;
	}
	/**
	 * @return int
	 */
	function getTotalAvailable()
	{
		return $this->TotalAvailable;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalAvailable($value)
	{
		$this->TotalAvailable = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeFilterCountType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'DisputeFilterType' =>
				array(
					'required' => false,
					'type' => 'DisputeFilterTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalAvailable' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
