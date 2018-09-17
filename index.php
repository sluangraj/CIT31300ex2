<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include_once('classes/users.class.php');
include_once('classes/registered_user.class.php');
include_once('classes/admin.class.php');

$registered = new Registered();
$admin = new Admin();

echo "User Level: $registered->user_level<br/>";
echo "Registered User ID: $registered->user_id<br/>";
echo "Registered User Type: $registered->user_type<br/>";
echo "Registered First Name: $registered->first_name<br/>";
echo "Registered Last Name: $registered->last_name<br/>";
echo "Registered Email: $registered->email_address<br/><br/>";

echo "<hr>";

echo "User Level: $admin->user_level<br/>";
echo "Admin User ID: $admin->user_id<br/>";
echo "Admin User Type: $admin->user_type<br/>";
echo "Admin First Name: $admin->first_name<br/>";
echo "Admin Last Name: $admin->last_name<br/>";
echo "Admin Email: $admin->email_address<br/>";


?>

 <!DOCTYPE html>
 <html>
 <head>
  <title>CIT 313 Fall 2018 - Intro to Object Oriented Programming</title>
</head>
<body>
  <?php

   ?>
 </body>
 </html>
