<?php

define('SITE_URL', Link::Build(''));

class HomeFront
{
	public $mSiteUrl;
	
	public $mHomeHearder = "home_login_header.tpl";    
    //public $mHomeNavigation = "blank.tpl";
    // public $mHomeMain = "blank.tpl";
    // public $mHomeMain = "home_ads_list.tpl";
	// public $mLandSystemMain = "account_login.tpl";
	
	// public $mHomeNavigation = "customer_login.tpl";
    public $mHomeMain = "home_ads_list.tpl";

	public function __construct()
	{
		$_SESSION['link_to_home_front'] = Link::Build('');
		
		$this->mSiteUrl = Link::Build('');
	}

	public function init()
	{    
        if ( isset ($_GET['RegisterCustomer']) || isset ($_GET['AccountDetails']) )
            $this->mHomeMain = 'customer_details.tpl';
		
		else if ( isset ($_GET['Login']) )
			$this->mHomeMain = 'customer_login.tpl';
			
		else if ( isset($_GET['User']) ) {		
			 if( isset($_GET['AccountProfile']) || isset($_GET['AccountEdit']) || isset($_GET['EarningStatus']) || isset($_GET['MyReferrals']))
				$this->mHomeMain = 'customer_profile.tpl';			
			 else if ( isset($_GET['ADS']) )
				$this->mHomeMain = 'user_ads.tpl';				
		} 
		
		else if ( isset ($_GET['Logout']) ) {
			Customer::Logout();
			$redirect_to_link = Link::Build('');
			header('Location:' . $redirect_to_link);
          	exit();
		}
            
		/*
        if (Account::IsAuthenticated() && isset($_GET))
		{
			$page = $_GET['page'];
			
			if ($page == 'homepage' || $page == 'management' || $page == 'history')
			{
				$this->mLandSystemTop = 'account_logged_header.tpl';
					
				if ($page == 'homepage')
				{
					$this->mLandSystemMain = 'account_logged_front.tpl';					
				}
					
				if ($page == 'management')
				{
					$this->mLandSystemMain = 'land_management.tpl';
				}
					
				if ($page == 'history')
				{
					$this->mLandSystemMain = 'blank.tpl';
				}

				
				 if (isset($_GET['Logout']))
				 {
				Account::Logout();
				//header('Location:' . Link::Build(''));
				header('Location:' . $_SESSION['link_to_land_front']);
				exit();
				}
				
				if (isset($_POST['submitback']))
				{
					//header('Location:' . Link::Build(''));
					header('Location:' . $_SESSION['link_to_land_front']);
					exit();
				}
				
				if (isset($_POST['sended']) || isset($_GET['sended']))
				{
					//header('Location:' . Link::Build(''));
					echo "1o0";
					echo "I am here.";
				}
				
			}
		}*/
	}
}
?>