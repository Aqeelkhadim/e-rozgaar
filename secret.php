<?php
session_start();

if($_SESSION['logedin']==1){
    header('location:alluser.php');
}else{

	header('location:index.php');
}