<?php
class CustomerDetails
{
  // Public attributes
  public $mEditMode = 0;
  public $mEmail;
  public $mName;
  public $mPassword;
  public $mDayPhone = null;
  public $mEvePhone = null;
  public $mMobPhone = null;
  public $mNameError = 0;
  public $mEmailAlreadyTaken = 0;
  public $mEmailError = 0;
  public $mPasswordError = 0;
  public $mPasswordConfirmError = 0;
  public $mPasswordMatchError = 0;
  public $mLinkToAccountDetails;
  public $mLinkToCancelPage;
  
  public $mAddress1 = '';
  public $mAddress2 = '';
  public $mCity = '';
  public $mRegion = '';
  public $mPostalCode = '';
  public $mCountry = '';
  public $mPaypal = '';

  // Privat attributes
  private $_mErrors = 0;

  // Class constructor
  public function __construct()
  {
    // Check if we have new user or editing existing customer details
    if (Customer::IsAuthenticated())
      $this->mEditMode = 1;

    if ($this->mEditMode == 0)
      $this->mLinkToAccountDetails = Link::ToRegisterCustomer();
    else
      $this->mLinkToAccountDetails = Link::ToAccountDetails();

    // Set the cancel page
    if (isset ($_SESSION['customer_cancel_link']))
      // $this->mLinkToCancelPage = $_SESSION['customer_cancel_link'];
      $this->mLinkToCancelPage = Link::Build('');
    else
    //  $this->mLinkToCancelPage = Link::ToIndex();
    	$this->mLinkToCancelPage = Link::Build('');

    // Check if we have submitted data
    if (isset ($_POST['sended']))
    {
      // Name cannot be empty
      if (empty ($_POST['name']))
      {
        $this->mNameError = 1;
        $this->_mErrors++;
      }
      else
        $this->mName = $_POST['name'];
        
      if ($this->mEditMode == 0 && empty ($_POST['email']))
      {
        $this->mEmailError = 1;
        $this->_mErrors++;
      }
      else
        $this->mEmail = $_POST['email'];
        
      // Password cannot be empty
      if (empty ($_POST['password']))
      {
        $this->mPasswordError = 1;
        $this->_mErrors++;
      }

      else
        $this->mPassword = $_POST['password'];

      // Password confirm cannot be empty
      if (empty ($_POST['passwordConfirm']))
      {
        $this->mPasswordConfirmError = 1;
        $this->_mErrors++;
      }
      else
        $password_confirm = $_POST['passwordConfirm'];

      // Password and password confirm should be the same
      if (!isset ($password_confirm) ||
          $this->mPassword != $password_confirm)
      {
        $this->mPasswordMatchError = 1;
        $this->_mErrors++;
      }

      if ($this->mEditMode == 1)
      {
      	
        if (!empty ($_POST['address_1']))
          $this->mAddress1 = $_POST['address_1'];

        if (!empty ($_POST['address_2']))
          $this->mAddress2 = $_POST['address_2'];

        if (!empty ($_POST['city']))
          $this->mCity = $_POST['city'];
          
        if (!empty ($_POST['region']))
          $this->mRegion = $_POST['region'];

        if (!empty ($_POST['postal_code']))
          $this->mPostalCode = $_POST['postal_code'];

        if (!empty ($_POST['country']))
          $this->mCountry = $_POST['country'];    
        
        if (!empty ($_POST['paypal']))
          $this->mPaypal = $_POST['paypal'];         
      }
    }
  }

  public function init()
  {
    // If we have submitted data and no errors in submitted data
    if ((isset ($_POST['sended'])) && ($this->_mErrors == 0))
    {
      // Check if we have any customer with submitted email...
      $customer_read = Customer::GetLoginInfo($this->mEmail);

      /* ...if we have one and we are in 'new user' mode then
         email already taken error */
      if ((!(empty ($customer_read['customer_id']))) &&
          ($this->mEditMode == 0))
      {
        $this->mEmailAlreadyTaken = 1;

        return;
      }

      // We have a new user or we are updating an existing user's details
      if ($this->mEditMode == 0)
      {
        Customer::Add($this->mName, $this->mEmail, $this->mPassword);
      }
      else
        Customer::UpdateAccountDetails($this->mName, $this->mEmail,
          $this->mPassword, $this->mAddress1, $this->mAddress2,
          $this->mCity, $this->mRegion, $this->mPostalCode, $this->mCountry, $this->mPaypal);

      header('Location:' . $this->mLinkToCancelPage);

      exit();
    }

    if ($this->mEditMode == 1 && !isset ($_POST['sended']))
    {
      // We are editing an existing customer's details
      $customer_data = Customer::GetDetail();

      $this->mName     = $customer_data['name'];
      $this->mEmail    = $customer_data['email'];
      $this->mAddress1 = $customer_data['address_1'];
      $this->mAddress2 = $customer_data['address_2'];
      $this->mCity = $customer_data['city'];
      $this->mRegion    = $customer_data['region'];
      $this->mPostalCode = $customer_data['postal_code'];
      $this->mCountry = $customer_data['country'];
      $this->mPaypal = $customer_data['paypal'];
    }
  }
}
?>