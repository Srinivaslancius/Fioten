<?php
session_start();
date_default_timezone_set("Asia/Kolkata");

$setcon = 2;
if($setcon == 1) {
	$servername = "localhost";
	$username = "capital_secure";
	$password = "capital@123";
	$dbname = "capitalsecure_latest";
} else {
<<<<<<< HEAD
	$servername = "192.168.0.102";	
=======
	$servername = "192.168.0.106";	
>>>>>>> 4adc09668940872ce720e48aa21ac1e49701f6ce
	$username = "root";
	$password = "root";
	$dbname = "fioten";
}
 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$base_url = "http://localhost/Fioten/";
?>