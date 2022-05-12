<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "indian_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Connection to the database failed due to the following error --> ".mysqli_connect_error());
	}

?>