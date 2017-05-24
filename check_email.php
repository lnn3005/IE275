<?php include('include/config.php'); ?>

<?php
    $email = $_GET['email'];
    if ($email == null) {
	    echo '0';
		}
	else {
	$getUser_sql = 'SELECT * FROM user WHERE email="'. $email . '" ';
    $getUser = mysql_query($getUser_sql);
    $getUser_RecordCount = mysql_num_rows($getUser);
	if  ($email =='cross') {
	    $getUser_RecordCount = 1;
		}

	if ($getUser_RecordCount < 1) {
	    echo '1';
	    }
	else {
	    echo '2';
		}
	}
?>	