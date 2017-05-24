<?php
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['username'] != null) {
        header("Location:home.php");
	    }
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login page</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
<script src="ajax/check_login.js">
</script>
</head>

<body>
<!-- <div class="global_nav">
<div class="logo">T226</div></div> -->

<table><tr><td>
<div class="panel" id="login_panel">
<div class="panel_text">
<form id="myform" action="login_successful.php" method="post">
<input id="username" name="username" type="text" placeholder="Username" class="fill" required> <br>
<input id="password" name="password" type="password" placeholder="Password" class="fill" required> <br>
<input id="signin_button" type="submit" value="Sign in" class="button" onclick="check_login(); return false"> 
<span id="login_error"></span><br>
<input name="remember_me" type="checkbox" value="remember_me">Remember me</input>
<a href="#1" id="forgot_password">Forgot password?</a>
</form>
</div></div>
<div class="panel" id="signup_panel">
<div class="panel_text">
<p>New to CWP? Sign up here:</p>
<form action="signup.php" method="post">
<input name="username_signup" type="text" class="fill" placeholder="Username"> <br>
<input name="email_signup" type="text" class="fill" placeholder="Email"> <br>
<input name="password_signup" type="password" placeholder="Password" class="fill"> <br>
<input id="signup_button" type="submit" value="Sign up for CWP" class="button"> <br>
</form>
</div></div></td>
<td>
<div id="welcome_panel">
<p class="welcome" id="welcome_message">Welcome to Crossword Puzzle.</p>
<p class="welcome" id="discription">Insert description here.</P>
</div>
</td></tr></table>


</body>

</html> 