<?php

class HomeLoginHeader
{

  /* Public variables available in departments_list.tpl Smarty template */
  public $mCustomerLogged = 0;
  public $mCustomerName = '';
  
  public $mSiteURL;
  public $mLoginURL;
  public $mLogoutURL;
  public $mAccountRegisterURL;
  public $mAccountDetailsURL;
  public $mAccountProfileURL;
  
  public $mLinkAccountADS;
  

  // Constructor reads query string parameter
  public function __construct()
  {
    /* If DepartmentId exists in the query string, we're visiting a
       department */
    // if (isset ($_GET['AdsId']))
    //  $this->mSelectedADS = (int)$_GET['AdsId'];
    $this->mSiteURL = Link::Build('');
    $this->mLoginURL = Link::Build('login');
    $this->mLogoutURL = Link::Build('logout');
    $this->mAccountRegisterURL = Link::Build('register-customer');
    $this->mAccountDetailsURL = Link::ToAccount('account-details');
    $this->mAccountProfileURL = Link::ToAccount();
    
    $this->mLinkAccountADS = Link::ToAccount('ads');
    
    
    if ( Customer::IsAuthenticated() )
		$this->mCustomerLogged = 1;
  }

  /* Calls business tier method to read departments list and create
     their links */
  public function init()
  {
    // Get the list of departments from the business tier
    // $this->mADS = HomeList::GetADSList();

    // Create the department links
    /*
    for ($i = 0; $i < count($this->mADS); $i++)
      $this->mADS[$i]['link_to_ads'] =
        'index.php?AdsId=' . $this->mADS[$i]['ads_id'];
        */
  	$customer = Customer::GetName();
  	$this->mCustomerName = $customer['name'];
  }
}
?>