<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'CompleteSaleRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_CompleteSale
 * 
 * Sample call for CompleteSale
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_CompleteSale.php,v 1.2 2008/06/30 12:50:01 michael Exp $
 * @access public 
 */
class sample_CompleteSale extends EbatNs_Environment
{

   /**
     * sample_CompleteSale::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new CompleteSaleRequestType();
        $req->setItemID($params['ItemID']);
        $req->setTransactionID($params['TransactionID']);
		
        $res = $this->proxy->CompleteSale($req);
        if ($this->testValid($res))
        {
            $this->dumpObject($res);
            return (true);
        }
        else 
        {
            return (false);
        }
    }
}

$x = new sample_CompleteSale();
$x->dispatchCall
(
	array
	(
		'ItemID' => 'ItemIdDummy', 
		'TransactionID' => 'TransactionIdDummy'
	)
);

?>