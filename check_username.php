<?php include('include/config.php'); ?>

<?php
    $username = $_GET['username'];
    if ($username == null) {
	    echo '0';
		}
	else {
	$getUser_sql = 'SELECT * FROM user WHERE username="'. $username . '" ';
    $getUser = mysql_query($getUser_sql);
    $getUser_RecordCount = mysql_num_rows($getUser);
	if  ($username =='cross') {
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