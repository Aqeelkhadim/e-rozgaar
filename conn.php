<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","php6");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>