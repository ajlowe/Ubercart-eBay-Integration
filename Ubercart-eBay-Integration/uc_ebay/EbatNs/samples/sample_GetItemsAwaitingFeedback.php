<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetItemsAwaitingFeedbackRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetItemsAwaitingFeedback
 * 
 * Sample call for GetItemsAwaitingFeedback
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetItemsAwaitingFeedback.php,v 1.2 2008/06/30 12:50:01 michael Exp $
 * @access public 
 */
class sample_GetItemsAwaitingFeedback extends EbatNs_Environment
{

   /**
     * sample_GetItemsAwaitingFeedback::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetItemsAwaitingFeedbackRequestType();
		
        $res = $this->proxy->GetItemsAwaitingFeedback($req);
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

$x = new sample_GetItemsAwaitingFeedback();
$x->dispatchCall(array());
?>