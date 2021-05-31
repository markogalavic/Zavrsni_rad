<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student_posao";

	$con=mysqli_connect("$servername","$username","$password","$dbname");
	mysqli_set_charset($con,"utf8");
	
	$GLOBALS['path'] = 'http://localhost/sites/studentPosao';

?>