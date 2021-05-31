<?php
	session_start();
	include "config/config.php";
	$username = "";
	$password = "";
	
	
	if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["ime"]) && isset($_POST["prezime"])
		&& isset($_POST["naziv_tvrtke"]) && isset($_POST["oib_tvrtke"])){
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$ime = $_POST["ime"];
		$prezime = $_POST["prezime"];
		$naziv_tvrtke = $_POST["naziv_tvrtke"];
		$oib_tvrtke = $_POST["oib_tvrtke"];
		
		$created = date("Y-m-d H:i");
		
		$sqlInsertData = "INSERT INTO `users`
		(`id`, `username`, `password`, `email`, `ime`, `prezime`, `ime_tvrtke`, `oib_tvrtke`, `created`) 
		VALUES ('','$username','$password','$email','$ime','$prezime','$naziv_tvrtke','$oib_tvrtke','$created')";
		mysqli_query($con,$sqlInsertData) or die(mysqli_error($con));
		
		//TODO: session for login
		
		header('Location: '.$GLOBALS["path"].''); // tu ide page ako je uspjesan 
		exit;
		
		
	}
	else {
		header('Location: '.$GLOBALS["path"].'');
		exit;
	}
	
?>