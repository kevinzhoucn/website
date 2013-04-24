<?php

class CustomerProfileLeftPanel {
	public $mLinkAccountSummary;
	public $mLinkAccountEdit;
	public $mLinkEarningStatus;
	public $mLinkMyReferrals;
	
	
	public function __construct() {
		$this->mLinkAccountSummary = Link::ToAccount();
		$this->mLinkAccountEdit = Link::ToAccount('account-edit');
		$this->mLinkEarningStatus = Link::ToAccount('earning-status');
		$this->mLinkMyReferrals = Link::ToAccount('my-referrals');
	}	
	
	public function init() {
		
	}
}