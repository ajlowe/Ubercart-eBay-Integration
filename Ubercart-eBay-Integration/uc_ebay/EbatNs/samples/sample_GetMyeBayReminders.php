<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetMyeBayRemindersRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetMyeBayReminders
 * 
 * Sample call for GetMyeBayReminders
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetMyeBayReminders.php,v 1.2 2008/06/30 12:50:01 michael Exp $
 * @access public 
 */
class sample_GetMyeBayReminders extends EbatNs_Environment
{

   /**
     * sample_GetMyeBayReminders::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetMyeBayRemindersRequestType();
        
        $res = $this->proxy->GetMyeBayReminders($req);
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

$x = new sample_GetMyeBayReminders();
$x->dispatchCall(array());

?>