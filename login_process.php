<?php
include('conn.php');
session_start();
$email=$_POST['email'];
$pas=$_POST['pass'];

//
$sql = "SELECT * FROM users WHERE email='$email' AND pass='$pas'";

 $result=$conn->query($sql);

//print_r($result);
//
//xdebug_break();
//$dbemail=$sql['email'];queryExec($sql) -> fetch_assoc()['email'];
//$dbpass=$sql['pass'];
if(mysqli_num_rows($result)>0){

	$_SESSION['logedin']=1;

	}
else{
	echo "please register your account";
}


if($_SESSION['logedin']==1){

	header('location:secret.php');
}else{
	header('location:index.php');
}


