<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetCharitiesRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetCharities
 * 
 * Sample call for GetCharities
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetCharities.php,v 1.2 2008/06/30 12:50:01 michael Exp $
 * @access public 
 */
class sample_GetCharities extends EbatNs_Environment
{

   /**
     * sample_GetCharities::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetCharitiesRequestType();
		
        $res = $this->proxy->GetCharities($req);
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

$x = new sample_GetCharities();
$x->dispatchCall(array());
?>