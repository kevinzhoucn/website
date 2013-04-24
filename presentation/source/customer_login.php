<?php
class CustomerLogin
{
  // Public stuff
  public $mErrorMessage;
  public $mLinkToLogin;
  public $mLinkToRegisterCustomer;
  public $mEmail = '';

  // Class constructor
  public function __construct()
  {
  /*
    if (USE_SSL == 'yes' && getenv('HTTPS') != 'on')
      $this->mLinkToLogin =
        Link::Build(str_replace(VIRTUAL_LOCATION, '', getenv('REQUEST_URI')),
                    'https');
    else
    */
      $this->mLinkToLogin =
        Link::Build(str_replace(VIRTUAL_LOCATION, '', getenv('REQUEST_URI')));

    $this->mLinkToRegisterCustomer = Link::ToRegisterCustomer();
    
    echo $this->mLinkToLogin;
    
  }

  public function init()
  {
    // Decide if we have submitted
    if (isset ($_POST['Login']))
    {
      // Get login status
      $login_status = Customer::IsValid($_POST['email'], $_POST['password']);

      switch ($login_status)
      {
        case 2:
          $this->mErrorMessage = 'Unrecognized Email.';
          $this->mEmail = $_POST['email'];

          break;
        case 1:
          $this->mErrorMessage = 'Unrecognized password.';
          $this->mEmail = $_POST['email'];

          break;
        case 0:
        	/*
          $redirect_to_link =
            Link::Build(str_replace(VIRTUAL_LOCATION, '',
                                    getenv('REQUEST_URI')));
                                    */

          //$redirect_to_link = $_SESSION['link_to_home_front'];
          $redirect_to_link = Link::ToAccount();
          header('Location:' . $redirect_to_link);
          exit();
      }
    }
  }
}
?>