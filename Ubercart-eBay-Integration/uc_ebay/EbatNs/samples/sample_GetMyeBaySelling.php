<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetMyeBaySellingRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetMyeBaySelling
 * 
 * Sample call for GetMyeBaySelling
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetMyeBaySelling.php,v 1.2 2008/06/30 12:50:01 michael Exp $
 * @access public 
 */
class sample_GetMyeBaySelling extends EbatNs_Environment
{

   /**
     * sample_GetMyeBaySelling::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetMyeBaySellingRequestType();
		
        $res = $this->proxy->GetMyeBaySelling($req);
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

$x = new sample_GetMyeBaySelling();
$x->dispatchCall(array());
?>