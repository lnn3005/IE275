<?php
if ($_SESSION['username'] == null) {
    header("Location:login.php");
	}
?>