<?php
$servername = 'mysql.hostinger.vn';
$username = 'u971113108_admin';
$password = 'iamaloner';
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
mysql_select_db("u971113108_admin",$conn);
?>