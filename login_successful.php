<?php
session_start();
include('include/config.php'); 
$username = $_POST["username"];
$password = $_POST["password"];
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
header("Location:home.php");
?>