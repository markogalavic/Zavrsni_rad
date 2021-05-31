<?php
	session_start();
	include "config/config.php";
	$username = "";
	$password = "";
	$brojacUsername = 0;
	
	if(isset($_POST["username"]) && isset($_POST["password"])){
		$_SESSION['error'] = 0;
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$sqlGetUserData = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$resultGetUserData = mysqli_query($con,$sqlGetUserData) or die(mysqli_error($con));
		$rowGetUserData = mysqli_fetch_array($resultGetUserData, MYSQLI_ASSOC);
		
		if($rowGetUserData){
			$username = $rowGetUserData["username"];
			header('Location: '.$GLOBALS["path"].''); // tu ide page ako je uspjesan login
			exit;
		}
		else {
			$_SESSION['error'] = 1;
			header('Location: '.$GLOBALS["path"].'/prijava.php');
			exit;
		}
		
	}
	else {
		header('Location: '.$GLOBALS["path"].'');
		exit;
	}
	
?>