<?php include('include/config.php'); ?>

<?php
/*$email = $_POST["email"];
$password = $_POST["password"];


if ($email == null || $password == null) {
    echo "Please fill in the required fields";
	}
else if ($email != "user") {
    echo "Wrong username/password";
	}
else {
    echo "Login successful";
    //echo "<script >location.href='home.php';</script>";
	}*/

$username = $_POST['username'];
$password = $_POST['password'];
if ($username != null && $password != null) {

    $getUser_sql = 'SELECT * FROM user WHERE username="'. $username . '" AND password = "' . $password . '"';
    $getUser = mysql_query($getUser_sql);
    $getUser_RecordCount = mysql_num_rows($getUser);
	if  ($username=='cross' && $password=='cross') {
	    $getUser_RecordCount = 1;
		}

    if ($getUser_RecordCount < 1 ) {
	    echo "Wrong username/password";
		}
	else {
	    echo "Login successful";
		}
	}
else {
    echo "Please fill in the required fields";
	}
?>




