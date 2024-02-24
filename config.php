<?php 
/* 
 * This is - PayPal and database configuration -  
*/ 
  
// PayPal configuration 
define('PAYPAL_ID', 'sb-moje129178071@personal.example.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'http://localhost/PAYPAL_integration_system/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://localhost/PAYPAL_integration_system/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'http://localhost/PAYPAL_integration_system/ipn.php'); 
define('PAYPAL_CURRENCY', 'USD'); 

// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'ppaypal_integration'); 

// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");

