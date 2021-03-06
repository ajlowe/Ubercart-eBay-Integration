<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'ModifyActionCodeType.php';
require_once 'AuthenticationEntryType.php';
require_once 'AbstractRequestType.php';

/**
 * Configures your application's authentication and authorization preferences 
 * andother data, such as the URLs that eBay should redirect users to after 
 * theycomplete the authentication and authorization process.<br><br>Unlike most 
 * other Trading API calls, this call requires the eBayUsername and Password values 
 * that you created for use by your applications.(Most Trading API calls, in 
 * contrast, require an authentication token.)These values are not described in 
 * thecurrent documentation topic. For more information about these values,please 
 * use the Setup for Authentication link below. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetReturnURLRequestType.html
 *
 */
class SetReturnURLRequestType extends AbstractRequestType
{
	/**
	 * @var AuthenticationEntryType
	 */
	protected $AuthenticationEntry;
	/**
	 * @var string
	 */
	protected $ApplicationDisplayName;
	/**
	 * @var ModifyActionCodeType
	 */
	protected $Action;

	/**
	 * @return AuthenticationEntryType
	 */
	function getAuthenticationEntry()
	{
		return $this->AuthenticationEntry;
	}
	/**
	 * @return void
	 * @param AuthenticationEntryType $value 
	 */
	function setAuthenticationEntry($value)
	{
		$this->AuthenticationEntry = $value;
	}
	/**
	 * @return string
	 */
	function getApplicationDisplayName()
	{
		return $this->ApplicationDisplayName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setApplicationDisplayName($value)
	{
		$this->ApplicationDisplayName = $value;
	}
	/**
	 * @return ModifyActionCodeType
	 */
	function getAction()
	{
		return $this->Action;
	}
	/**
	 * @return void
	 * @param ModifyActionCodeType $value 
	 */
	function setAction($value)
	{
		$this->Action = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetReturnURLRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AuthenticationEntry' =>
				array(
					'required' => false,
					'type' => 'AuthenticationEntryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ApplicationDisplayName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Action' =>
				array(
					'required' => false,
					'type' => 'ModifyActionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
