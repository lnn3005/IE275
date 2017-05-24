<?php 
session_start();
include('include/config.php'); 
include('include/config2.php');
include('include/bar.htm');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Home page</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>
<div>
<?php

echo "Welcome to our home page, ", $_SESSION['username'], "!";

?>
<div id="profile">
<div id="username"> <?php echo $_SESSION['username'] ?> </div>
<img src="images/profile.jpg" width="180" height="180" border="1"> </img>
<div id="information">
<span class="info"> Date joined: </span><br>
<span class="info"> Location: </span><br>
<span class="info"> Puzzles solved: </span><br>
<span class="info"> Score: </span><br>
</div>
</div>
</div>

</body>
</html>