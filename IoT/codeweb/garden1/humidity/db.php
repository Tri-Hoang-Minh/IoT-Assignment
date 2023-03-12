<?php
$password = "";
$server = "localhost";
$DB = 'iotgarden';
$username= 'root';
 
$con= new mysqli($server, $username, $password, $DB);      
	mysqli_set_charset($con, "utf8");
?>    
	