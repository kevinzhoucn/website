<?php

class CustomerAccountSummary {
	public $mRegisterDate = '';
	public $mMemberLevel = '';
	public $mLastLoginDate = '';
	public $mLastLoginIP = '';
	
	public function __construct() {
		
	}
	
	public function init() {		
		$customer_summary = Customer::GetProfile();
		$this->mRegisterDate = $customer_summary['register_date'];
		$this->mMemberLevel = $customer_summary['member_level'];
		$this->mLastLoginDate = $customer_summary['last_login_date'];
		$this->mLastLoginIP = $customer_summary['last_login_ip'];
	}
}