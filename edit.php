<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	
	mysqli_query($conn,"update users set name='$name', email='$email', pass='$password' where id='$id'");
	header('location:alluser.php');

?>