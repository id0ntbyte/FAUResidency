<?php
// Do not change the following two lines.
$teamURL = dirname($_SERVER['PHP_SELF']) . DIRECTORY_SEPARATOR;
$server_root = dirname($_SERVER['PHP_SELF']);

// You will need to require this file on EVERY php file that uses the database.
// Be sure to use $db->close(); at the end of each php file that includes this!

$dbhost = 'sql205.byethost.com';  // Most likely will not need to be changed
$dbname = 'b9_19286754_RESIDENCY';   // Needs to be changed to your designated table database name
$dbuser = 'FAUresidency1234';   // Needs to be changed to reflect your LAMP server credentials
$dbpass = 'wqa'; // Needs to be changed to reflect your LAMP server credentials

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}

