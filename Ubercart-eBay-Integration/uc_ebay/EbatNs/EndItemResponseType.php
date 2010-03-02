<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Includes the acknowledgement of date and time the auction wasended due to the 
 * call to EndItem. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EndItemResponseType.html
 *
 */
class EndItemResponseType extends AbstractResponseType
{
	/**
	 * @var dateTime
	 */
	protected $EndTime;

	/**
	 * @return dateTime
	 */
	function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EndItemResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'EndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>