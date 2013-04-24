<?php
// Business tier class that manages customer accounts functionality
class Customer
{
  // Checks if a customer_id exists in session
  public static function IsAuthenticated()
  {
    if (!(isset ($_SESSION['website_customer_id'])))
      return 0;
    else
      return 1;
  }

  // Returns customer_id and password for customer with email $email
  public static function GetLoginInfo($email)
  {
    // Build the SQL query
    $sql = 'CALL customer_get_login_info(:email)';

    // Build the parameters array
    $params = array (':email' => $email);

    // Execute the query and return the results
    return DatabaseHandler::GetRow($sql, $params);
  }

  public static function IsValid($email, $password)
  {
    $customer = self::GetLoginInfo($email);

    if (empty ($customer['customer_id']))
      return 2;

    $customer_id = $customer['customer_id'];
    $hashed_password = $customer['password'];

    
    // if (PasswordHasher::Hash($password) != $hashed_password)
    if ($password != $hashed_password)
      return 1;
    else
    {
      $_SESSION['website_customer_id'] = $customer_id;
      self::InsertLoginHistory();

      return 0;
    }
  }

  public static function Logout()
  {
    unset($_SESSION['website_customer_id']);
  }

  public static function GetCurrentCustomerId()
  {
    if (self::IsAuthenticated())
      return $_SESSION['website_customer_id'];
    else
      return 0;
  }

  /* Adds a new customer account, log him in if $addAndLogin is true
     and returns customer_id */
  public static function Add($name, $email, $password, $addAndLogin = true)
  {
    // $hashed_password = PasswordHasher::Hash($password);
    $hashed_password = $password;
    $client_ip = self::GetClientIP();

    // Build the SQL query
    $sql = 'CALL customer_add(:name, :email, :password, :register_ip)';

    // Build the parameters array
    $params = array (':name' => $name, ':email' => $email,
                     ':password' => $hashed_password, 
    				 'register_ip' => $client_ip);

    // Execute the query and get the customer_id
    $customer_id = DatabaseHandler::GetOne($sql, $params);

    if ($addAndLogin)
      $_SESSION['website_customer_id'] = $customer_id;

    return $customer_id;
  }

  public static function Get($customerId = null)
  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    // Build the SQL query
    $sql = 'CALL customer_get_customer(:customer_id)';

    // Build the parameters array
    $params = array (':customer_id' => $customerId);

    // Execute the query and return the results
    return DatabaseHandler::GetRow($sql, $params);
  }
  
public static function GetDetail($customerId = null)
  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    // Build the SQL query
    $sql = 'CALL customer_get_detail(:customer_id)';

    // Build the parameters array
    $params = array (':customer_id' => $customerId);

    // Execute the query and return the results
    return DatabaseHandler::GetRow($sql, $params);
  }
  
public static function GetName($customerId = null)
  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    // Build the SQL query
    $sql = 'CALL customer_get_name(:customer_id)';

    // Build the parameters array
    $params = array (':customer_id' => $customerId);

    // Execute the query and return the results
    return DatabaseHandler::GetRow($sql, $params);
  }
  
public static function GetProfile($customerId = null)
  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    // Build the SQL query
    $sql = 'CALL customer_get_profile(:customer_id)';

    // Build the parameters array
    $params = array (':customer_id' => $customerId);

    // Execute the query and return the results
    return DatabaseHandler::GetRow($sql, $params);
  }
  
public static function InsertLoginHistory($customerId = null)
{
	if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();
    
    $client_ip = self::GetClientIP();
      
    $sql = 'CALL insert_login_history(:customer_id, :login_ip)';

    // Build the parameters array
    $params = array (':customer_id' => $customerId, ':login_ip' => $client_ip);

    // Execute the query
    DatabaseHandler::Execute($sql, $params);
}

  public static function UpdateAccountDetails($name, $email, $password,
                           $address_1, $address_2, $city, $region, $postal_code, $country, $paypal,  
                           $customerId = null)
  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    // $hashed_password = PasswordHasher::Hash($password);
    $hashed_password = $password;

    // Build the SQL query
    $sql = 'CALL customer_update_account(:customer_id, :name, :email,
                   :password, :address_1, :address_2, :city, :region, :postal_code, :country, :paypal)';

    // Build the parameters array
    $params = array (':customer_id' => $customerId, ':name' => $name,
                     ':email' => $email, ':password' => $hashed_password,
                     ':address_1' => $address_1, ':address_2' => $address_2,
                     ':city' => $city, ':region' => $region, ':postal_code' => $postal_code, ':country' => $country, 
    				 ':paypal' => $paypal);

    // Execute the query
    DatabaseHandler::Execute($sql, $params);
  }

  public static function DecryptCreditCard($encryptedCreditCard)
  {
    $secure_card = new SecureCard();
    $secure_card->LoadEncryptedDataAndDecrypt($encryptedCreditCard);

    $credit_card = array();
    $credit_card['card_holder'] = $secure_card->CardHolder;
    $credit_card['card_number'] = $secure_card->CardNumber;

    $credit_card['issue_date'] = $secure_card->IssueDate;
    $credit_card['expiry_date'] = $secure_card->ExpiryDate;
    $credit_card['issue_number'] = $secure_card->IssueNumber;
    $credit_card['card_type'] = $secure_card->CardType;
    $credit_card['card_number_x'] = $secure_card->CardNumberX;

    return $credit_card;
  }

  public static function GetPlainCreditCard()
  {
    $customer_data = self::Get();

    if (!(empty ($customer_data['credit_card'])))
      return self::DecryptCreditCard($customer_data['credit_card']);
    else
      return array('card_holder' => '', 'card_number' => '',
                   'issue_date' => '', 'expiry_date' => '',
                   'issue_number' => '', 'card_type' => '',
                   'card_number_x' => '');
  }

  public static function UpdateCreditCardDetails($plainCreditCard,
                                                 $customerId = null)

  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    $secure_card = new SecureCard();
    $secure_card->LoadPlainDataAndEncrypt($plainCreditCard['card_holder'],
      $plainCreditCard['card_number'], $plainCreditCard['issue_date'],
      $plainCreditCard['expiry_date'], $plainCreditCard['issue_number'],
      $plainCreditCard['card_type']);
    $encrypted_card = $secure_card->EncryptedData;

    // Build the SQL query
    $sql = 'CALL customer_update_credit_card(:customer_id, :credit_card)';

    // Build the parameters array
    $params = array (':customer_id' => $customerId,
                     ':credit_card' => $encrypted_card);

    // Execute the query
    DatabaseHandler::Execute($sql, $params);
  }

  public static function GetShippingRegions()
  {
    // Build the SQL query
    $sql = 'CALL customer_get_shipping_regions()';

    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql);
  }

  public static function UpdateAddressDetails($address1, $address2, $city,
                           $region, $postalCode, $country,
                           $shippingRegionId, $customerId = null)
  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    // Build the SQL query
    $sql = 'CALL customer_update_address(:customer_id, :address_1,
                   :address_2, :city, :region, :postal_code, :country,
                   :shipping_region_id)';

    // Build the parameters array
    $params = array (':customer_id' => $customerId,
                     ':address_1' => $address1, ':address_2' => $address2,
                     ':city' => $city, ':region' => $region,
                     ':postal_code' => $postalCode,
                     ':country' => $country,
                     ':shipping_region_id' => $shippingRegionId);

    // Execute the query
    DatabaseHandler::Execute($sql, $params);
  }
  
  public static function GetClientIP()
  {
  	 if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		//check ip from share internet
		$ip = $_SERVER['HTTP_CLIENT_IP'];
		}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		//to check ip is pass from proxy
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;  	
  }
}
?>