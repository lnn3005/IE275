<?php 
session_start();
include('include/config.php'); 
$_SESSION['username'] = $username;

include('include/config2.php');
include('include/bar.htm');
$getUser = mysql_query("SELECT * FROM user");
$row = mysql_num_rows($getUser) + 1;
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$insert ="INSERT INTO user (id, email, username, password)
    VALUES ('$row','$email','$username','$password')";
mysql_query($insert);
?>

<!DOCTYPE HTML>
<html>
<head>
<title> Account created </title>
</head>

<body>
<div>
An account with your information has been successfully created.
Start solving puzzles by clicking on the above links!
</div>
</body>