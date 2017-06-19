<?php
	$hostname = getenv('UATDB03_SERVICE_HOST');
	$username = getenv('MYSQL_USER');
	$password = getenv('MYSQL_PASSWORD');
	$database = getenv('MYSQL_DATABASE');
	
	echo "<h1>Project UAT - PHP Application</h1>";
	echo "Hostname : " . $hostname . "<br/>";
	echo "Username : " . $username . "<br/>";
	echo "Password : " . $password . "<br/>";
	echo "Database : " . $database . "<br/>";
	
	
	$connection = mysqli_connect($hostname, $username, $password, $database);
	if(!$connection){
		echo "Connect failed: " . mysqli_connect_error();
	} else {
		echo "Connected successfully";
	}
	
	
?>