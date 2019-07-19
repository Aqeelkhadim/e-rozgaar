<?php
	include('conn.php');
	
	$name=$_POST['name'];
	$emial=$_POST['email'];
	$password=$_POST['pass'];
	
	mysqli_query($conn,"insert into users (name, pass, email) values ('$name', '$password', '$emial')");
	header('location:alluser.php');

?>