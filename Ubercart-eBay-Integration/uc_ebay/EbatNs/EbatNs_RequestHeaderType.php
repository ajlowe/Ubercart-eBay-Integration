<?php
// $Id: EbatNs_RequestHeaderType.php,v 1.2 2008/05/02 15:04:05 carsten Exp $
// $Log: EbatNs_RequestHeaderType.php,v $
// Revision 1.2  2008/05/02 15:04:05  carsten
// Initial, PHP5
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNs_RequesterCredentialType.php';

class EbatNs_RequestHeaderType extends EbatNs_ComplexType
{
    /**
     * @var EbatNs_RequesterCredentialType
     */
    protected $RequesterCredentials;

    function __construct ()
    {
        parent::__construct('EbatNs_RequestHeaderType', 'urn:ebay:apis:eBLBaseComponents');
        $this->_elements = array_merge($this->_elements, array(
            'RequesterCredentials' => array('required' => true , 
                'type' => 'EbatNs_RequesterCredentialType' , 
                'nsURI' => 'http://www.w3.org/2001/XMLSchema')));
    }

    /**
     * @param EbatNs_RequesterCredentialType $RequesterCredentials
     */
    public function setRequesterCredentials ($requesterCredentials)
    {
        $this->RequesterCredentials = $requesterCredentials;
    }
}
?>