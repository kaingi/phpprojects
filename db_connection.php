<?php
	$dbhost="localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "registration";

	$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if ($conn === false){
		die("ERROR: could not connec" . mysqli_connect_error());
	}
?>