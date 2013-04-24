<?php
class CustomerProfile{
	public $mLeftPanel = 'blank.tpl';
	public $mContent = 'blank.tpl';
	public $mRightPanel = 'blank.tpl';
	
	public function __construct(){		
		if (!Customer::IsAuthenticated()){			
			$redirect_to_link = Link::Build('login');
			header('Location:' . $redirect_to_link);
			exit();
		}				
	}
	
	public function init(){	
		
			$this->mLeftPanel = 'customer_profile_left_panel.tpl';	
		
			if (isset($_GET['AccountProfile'])) {
				$this->mContent = 'customer_account_summary.tpl';
			} else if ( isset($_GET['AccountEdit'])){
				$this->mContent = 'customer_details.tpl';
			} else if ( isset($_GET['EarningStatus'])) {
				$this->mContent = 'user_earning.tpl';
			} else if ( isset($_GET['MyReferrals'])) {
								
			} else {
				$this->mContent = 'customer_account_summary.tpl';
			}		
			
			$this->mRightPanel = 'blank.tpl';		
	}
}
