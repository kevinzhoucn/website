<?php

class HomeList
{
  // Retrieves all departments
  public static function GetADSList() 
  {
    // Build SQL query
    $sql = 'CALL home_get_ads_list()';

    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql);
  }
  
  public static function GetUserADSDaily() 
  {
  	$sql = 'CALL get_user_daily_ads()';
  	
  	return DatabaseHandler::GetAll($sql);
  }
  
  public static function GetUserADSFixed() 
  {
  	$sql = 'CALL get_user_fixed_ads()';
  	
  	return DatabaseHandler::GetAll($sql);
  }
}
?>