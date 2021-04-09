<?php
include 'connection.php';
	require_once "config.php";

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: user_login.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();



	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];


	$dbfname = $userData['givenName'];
	$dblname = $userData['familyName'];
	$dbemail=$userData['email'];

	$sql = "INSERT INTO user(first_name,last_name,email)
VALUES ('$dbfname','$dblname','$dbemail');";
      // execute query
      mysqli_query($conn, $sql);

	header('Location: login_pass.php');
	exit();
?>
