<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("917936359040-oi7v9cvl7ncq77bdvlc1816etq01tvv4.apps.googleusercontent.com");
	$gClient->setClientSecret("AVrcGI0kvjDSlFsb_gFI5Yuf");
	$gClient->setApplicationName("MAP Login");
	
	$gClient->setRedirectUri("http://localhost/Project/CSE327_Project/MedicAid+/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
