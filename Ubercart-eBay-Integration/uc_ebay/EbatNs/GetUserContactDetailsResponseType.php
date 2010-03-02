<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AddressType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns contact information to a seller for both biddersand users who have made 
 * offers (via Best Offer) duringan active listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetUserContactDetailsResponseType.html
 *
 */
class GetUserContactDetailsResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $UserID;
	/**
	 * @var AddressType
	 */
	protected $ContactAddress;
	/**
	 * @var dateTime
	 */
	protected $RegistrationDate;

	/**
	 * @return string
	 */
	function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
	/**
	 * @return AddressType
	 */
	function getContactAddress()
	{
		return $this->ContactAddress;
	}
	/**
	 * @return void
	 * @param AddressType $value 
	 */
	function setContactAddress($value)
	{
		$this->ContactAddress = $value;
	}
	/**
	 * @return dateTime
	 */
	function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setRegistrationDate($value)
	{
		$this->RegistrationDate = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetUserContactDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'UserID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ContactAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RegistrationDate' =>
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