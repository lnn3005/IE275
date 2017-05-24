<!DOCTYPE HTML>
<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" type="text/css" href="css/signup.css">
<script src="ajax/check_signup.js"></script>
</head>

<body>

<!-- <div class="global_nav">
<div class="logo">T226</div></div> -->

<div class="box">
<div class="form">
<form action="create.php" id="myform" method="post">
<h1>Create an account</h1>
<div class="prompt_name">
<div class="field_name">Full name</div>
<div class="fill">
<input type="text" class="fill" name="name" required>
</div>
</div>

<div class="prompt_email">
<div class="field_name">Email</div>
<div class="fill">
<?php 
if (isset($_POST["email_signup"])) {
    $email = $_POST["email_signup"];
    echo '<input type="text" id="email" name="email" class="fill" ';
	if ($email != null) {
        echo 'value="', $email;
		}
	}
else {
    echo '<input type="text" id="email" name="email" class="fill" ';
	}
echo '" onblur="validate_e()" required>';
?>
<span id="email_noti"></span>
</div>
</div>

<div class="prompt_password">
<div class="field_name">Password</div>
<div class="fill">
<?php 
if (isset($_POST["password_signup"])) {
    $pw = $_POST["password_signup"];
    echo '<input type="password" id="password" name="password" class="fill" ';
	if ($pw != null) {
        echo 'value="', $pw;
		}
	}
else {
    echo '<input type="password" class="fill" id="password" name="password" ';
	}
echo '" onblur="validate_p()" required>';
?>
<span id="psw_noti"></span>
</div>
</div>

<div class="prompt_username">
<div class="field_name">Choose your username</div>
<div class="fill">
<?php 
if (isset($_POST["username_signup"])) {
    $username = $_POST["username_signup"];
    echo '<input type="text" id="username" name="username" class="fill" ';
	if ($username != null) {
        echo 'value="', $username;
		}
	}
else {
    echo '<input type="text" id="username" name="username" class="fill" ';
	}
echo '" onblur="validate_u()" required>';
?>
<span id="user_noti"></span>
</div>
</div>

<input class="remember_me" type="checkbox" value="remember_me">Keep me signed in on this computer</input>

<div class="terms_box">
By clicking the button, you agree to the terms below: <br>
<!-- insert terms here, use php -->
<div class="terms">
<?php
$file = fopen("docs/terms.txt", "r") or exit("Unable to open file!");
while(!feof($file))
  {
  echo fgets($file). "<br>";
  }
fclose($file);
?>
</div>
</div>
<br>
<div class="signup_button">
<input id="signup_button" type="button" value="Create a CWP account" class="button" onclick="validate()"> 
</div>
</form>
</div>
</div>

</body>
</html>
