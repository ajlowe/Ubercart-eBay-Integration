<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * <b>The use of this call requires approval from the eBay Developers Program.If 
 * you would like access,please send an email to developer-relations@ebay.com 
 * detailing your typical usage,with estimated usage numbers for this 
 * call.</b><br><br>This call retrieves top-ranked contextual eBay keywords and 
 * categories for a specified webpage. Results are ranked according to score. This 
 * enables developers to createapplications that are different from traditional 
 * contextual ad serving. Forinstance, instead of building a standard ad banner or 
 * skyscraper ad like thosefrom eBay AdContext, a developer could create an 
 * application that does inlinehyperlinking of keywords on any page or create 
 * widgets for blog platforms.Not available for SG and HK sites. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetContextualKeywordsRequestType.html
 *
 */
class GetContextualKeywordsRequestType extends AbstractRequestType
{
	/**
	 * @var anyURI
	 */
	protected $URL;
	/**
	 * @var string
	 */
	protected $Encoding;
	/**
	 * @var string
	 */
	protected $CategoryID;

	/**
	 * @return anyURI
	 */
	function getURL()
	{
		return $this->URL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setURL($value)
	{
		$this->URL = $value;
	}
	/**
	 * @return string
	 */
	function getEncoding()
	{
		return $this->Encoding;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEncoding($value)
	{
		$this->Encoding = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getCategoryID($index = null)
	{
		if ($index !== null) {
			return $this->CategoryID[$index];
		} else {
			return $this->CategoryID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setCategoryID($value, $index = null)
	{
		if ($index !== null) {
			$this->CategoryID[$index] = $value;
		} else {
			$this->CategoryID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addCategoryID($value)
	{
		$this->CategoryID[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetContextualKeywordsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'URL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Encoding' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>