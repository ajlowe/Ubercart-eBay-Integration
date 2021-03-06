<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'UploadSiteHostedPicturesRequestType.php';
require_once 'PictureSetCodeType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_UploadSiteHostedPictures
 * 
 * Sample call for UploadSiteHostedPictures
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_UploadSiteHostedPictures.php,v 1.2 2008/06/30 12:50:01 michael Exp $
 * @access public
 */
class sample_UploadSiteHostedPictures extends EbatNs_Environment
{

   /**
     * sample_UploadSiteHostedPictures::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new UploadSiteHostedPicturesRequestType();

        $req->setPictureData(file_get_contents($params['PictureData']));
        $req->setPictureSet(PictureSetCodeType::CodeType_Supersize);
		//$req->setPictureUploadPolicy('CustomCode');   
		     
        $res = $this->proxy->UploadSiteHostedPictures($req);
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

$x = new sample_UploadSiteHostedPictures();
$x->dispatchCall
(
	array
	(
		'PictureData' => 'Link'
	)
);
?>
