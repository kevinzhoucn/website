-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2013 at 09:15 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `owner_id` int(11) NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`ads_id`, `name`, `url`, `description`, `owner_id`) VALUES
(1, 'Google', 'http://www.google.com', 'Google homepage', 1),
(2, 'Baidu', 'http://www.baidu.com', 'Baidu homepage.', 1),
(3, 'Bing', 'http://www.bing.com', 'Bing homepage', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- Create home_get_ads_list stored procedure
DROP PROCEDURE IF EXISTS home_get_ads_list$$

CREATE PROCEDURE home_get_ads_list()
BEGIN
  SELECT ads_id, name, url, description FROM advertisement LIMIT 10;
END$$

DROP PROCEDURE IF EXISTS customer_get_name$$
CREATE PROCEDURE customer_get_name(IN inCustomerId INT)
BEGIN
  SELECT name FROM customer where customer_id = inCustomerId;
END$$


-- Create customer_add stored procedure
DROP PROCEDURE IF EXISTS customer_add $$

CREATE PROCEDURE customer_add(IN inName VARCHAR(50),
  IN inEmail VARCHAR(100), IN inPassword VARCHAR(50), IN inRegisterIp VARCHAR(50))
BEGIN
  DECLARE inNewCustomerID INT;
  INSERT INTO customer (name, email, password, register_date, register_ip, member_level, last_login_date, last_login_ip, last_update_time)
         VALUES (inName, inEmail, inPassword, NOW(), inRegisterIp, 1, NOW(), inRegisterIp, NOW());

  SELECT LAST_INSERT_ID() INTO inNewCustomerID;
  
  INSERT INTO customer_address (customer_id) VALUES (inNewCustomerID);
  SELECT inNewCustomerID;
END$$

-- Create customer_get_customer stored procedure
DROP PROCEDURE IF EXISTS customer_get_customer $$
CREATE PROCEDURE customer_get_customer(IN inCustomerId INT)
BEGIN
  SELECT customer_id, name, email, password
  FROM   customer
  WHERE  customer_id = inCustomerId;
END$$

DROP PROCEDURE IF EXISTS customer_get_detail $$
CREATE PROCEDURE customer_get_detail(IN inCustomerId INT)
BEGIN
  SELECT c.customer_id, c.name, c.email, ca.address_1, ca.address_2, ca.city, ca.region, ca.postal_code, ca.country, ca.paypal
  FROM   customer c INNER JOIN customer_address ca ON c.customer_id = ca.customer_id 
  WHERE  c.customer_id = inCustomerId;
END$$

-- Create customer_get_profile stored procedure
DROP PROCEDURE IF EXISTS customer_get_profile $$

CREATE PROCEDURE customer_get_profile (IN inCustomerId INT)
BEGIN  
     SELECT register_date, member_level, last_login_date, last_login_ip FROM customer where customer_id = inCustomerId LIMIT 1;
END$$

-- Create insert_login_history stored procedure
DROP PROCEDURE IF EXISTS insert_login_history $$

CREATE PROCEDURE insert_login_history(IN inCustomerId INT, IN inClientIP VARCHAR(50))
BEGIN
     DECLARE inMemberLevel INT;
     SELECT member_level FROM customer WHERE customer_id = inCustomerId LIMIT 1 INTO inMemberLevel;
     UPDATE customer 
     SET last_login_date = ( SELECT login_date FROM customer_login_history WHERE customer_id = inCustomerId ORDER BY id DESC LIMIT 1), 
     last_login_ip = ( SELECT login_ip FROM customer_login_history WHERE customer_id = inCustomerId ORDER BY id DESC LIMIT 1)
     WHERE customer_id = inCustomerId;
     INSERT INTO customer_login_history(customer_id, login_ip, login_date, member_level)
     VALUES(inCustomerId, inClientIP, NOW(), inMemberLevel);
END$$

-- Create insert_login_history stored procedure
DROP PROCEDURE IF EXISTS customer_update_account $$

CREATE PROCEDURE customer_update_account(IN inCustomerId INT, IN inName VARCHAR(50), IN inEmail VARCHAR(100), IN inPassword VARCHAR(50),
                                         IN inAddress1 VARCHAR(100), IN inAddress2 VARCHAR(100), IN inCity VARCHAR(50), IN inRegion VARCHAR(50),
                                         IN inPostalCode VARCHAR(20), IN inCountry VARCHAR(20), IN inPaypal VARCHAR(100))
BEGIN     
     UPDATE customer 
     SET name = inName, email = inEmail
     WHERE customer_id = inCustomerId;
     
     UPDATE customer_address
     SET address_1 = inAddress1, address_2 = inAddress2, city = inCity, region = inRegion, postal_code = inPostalCode,
     country = inCountry, paypal = inPaypal
     WHERE customer_id = inCustomerId;
END$$

-- Create get_user_daily_ads stored procedure
DROP PROCEDURE IF EXISTS get_user_daily_ads $$
CREATE PROCEDURE get_user_daily_ads()
BEGIN
	SELECT url, description FROM ads WHERE type = 1 AND is_banned = 0 AND is_deleted = 0 LIMIT 10;
END$$

-- Create get_user_fixed_ads stored procedure
DROP PROCEDURE IF EXISTS get_user_fixed_ads $$
CREATE PROCEDURE get_user_fixed_ads()
BEGIN
	SELECT url, description FROM ads WHERE type = 2 AND is_banned = 0 AND is_deleted = 0 LIMIT 10;
END$$

