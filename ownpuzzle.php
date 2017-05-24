<?php 
session_start();
include('include/config.php'); 
include('include/config2.php');
include('include/bar.htm');
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Submit puzzle</title>
</head>

<body>
This is the page where users can submit their own puzzles.
<p>Please enter the number of rows and columns your crossword grid will have.</p>
    <form action= "DisplayGrid.php" method="POST">
        Rows / Columns: <input type="text" name="rowsCols" size=2>
        <br>
        Total Number of Clues: <input type="text" name="totalClues" size=2>
        <br>
        <input type="submit" value="Display Grid and Clues">
    </form>
</body>

</html>