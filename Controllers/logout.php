<?php
session_start(); //start session
unset($_SESSION["login_user"]); //deletes the session
unset($_SESSION["login_user_email"]);
$url = "http://fauresidencyapp.byethost9.com";
if(isset($_GET["session_expired"])) { //sends user to the main page
	$url .= "?session_expired=1" . $_GET["session_expired"];
}
if(isset($_GET["permission_denied"])) { //sends user to the main page
	$url .= "?permission_denied=1" . $_GET["permission_denied"];
}
if(isset($_GET["loggedout"])) { //sends user to the main page
	$url .= "?loggedout=1" . $_GET["loggedout"];
}
header("Location:$url");
?>
