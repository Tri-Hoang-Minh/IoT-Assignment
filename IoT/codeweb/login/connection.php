<?php
$server_password = "";
$server_host = "localhost";
$database = 'iotgarden';
$server_username= 'root';
 
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
?>