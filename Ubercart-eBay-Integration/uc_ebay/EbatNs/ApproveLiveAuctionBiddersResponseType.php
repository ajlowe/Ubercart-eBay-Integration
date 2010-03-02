<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'LiveAuctionApprovalStatusArrayType.php';

/**
 * Provides the Live Auction sellers with the ability to approve, decline,and set 
 * the bidding limit of the bidders that have signed up for a catalog. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ApproveLiveAuctionBiddersResponseType.html
 *
 */
class ApproveLiveAuctionBiddersResponseType extends AbstractResponseType
{
	/**
	 * @var LiveAuctionApprovalStatusArrayType
	 */
	protected $BidderUpdateStatus;

	/**
	 * @return LiveAuctionApprovalStatusArrayType
	 */
	function getBidderUpdateStatus()
	{
		return $this->BidderUpdateStatus;
	}
	/**
	 * @return void
	 * @param LiveAuctionApprovalStatusArrayType $value 
	 */
	function setBidderUpdateStatus($value)
	{
		$this->BidderUpdateStatus = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ApproveLiveAuctionBiddersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BidderUpdateStatus' =>
				array(
					'required' => false,
					'type' => 'LiveAuctionApprovalStatusArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>