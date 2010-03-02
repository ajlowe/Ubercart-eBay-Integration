<?php
// $Id: EbatNs_RequesterCredentialType.php,v 1.3 2008/06/13 08:51:37 michael Exp $
// $Log: EbatNs_RequesterCredentialType.php,v $
// Revision 1.3  2008/06/13 08:51:37  michael
// fixed typo
//
// Revision 1.2  2008/05/02 15:04:05  carsten
// Initial, PHP5
//
//
require_once 'EbatNs_ComplexType.php';

class EbatNs_RequesterCredentialType extends EbatNs_ComplexType
{
    /**
     * @var string
     */
    protected $eBayAuthToken;

    /**
     * @var CredentialType
     */
    protected $Credentials;

    /**
     * @var array
     */
    protected $_attributeValues;

    function __construct ()
    {
        $this->_attributeValues['soap:actor'] = '';
        $this->_attributeValues['soap:mustUnderstand'] = '0';
        $this->_attributeValues['xmlns'] = 'urn:ebay:apis:eBLBaseComponents';
        
        parent::__construct('EbatNs_RequesterCredentialType', 'urn:ebay:apis:eBLBaseComponents');
        $this->_elements = array_merge($this->_elements, array(
            'eBayAuthToken' => array('required' => false , 
                'type' => 'string' , 
                'nsURI' => 'http://www.w3.org/2001/XMLSchema') , 
            'Credentials' => array('required' => false , 
                'type' => 'CredentialType' , 
                'nsURI' => 'http://www.w3.org/2001/XMLSchema')));
    }

    /**
     * @param CredentialType $Credentials
     */
    public function setCredentials ($credentials)
    {
        $this->Credentials = $credentials;
    }

    /**
     * @param string $eBayAuthToken
     */
    public function setEBayAuthToken ($eBayAuthToken)
    {
        $this->eBayAuthToken = $eBayAuthToken;
    }
}
?>