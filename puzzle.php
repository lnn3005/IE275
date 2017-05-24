<?php 
session_start();
include('include/config.php'); 
include('include/config2.php');
include('include/bar.htm');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Daily puzzle</title>
<script src="js/drawpuzzle.js"></script>
<link rel="stylesheet" type="text/css" href="css/puzzle.css">
</head>

<body>
<div>
Rules:
<ul>  
<li> Insert rules here </li>
<li> Insert rules here </li>
<li> Insert rules here </li>
</ul>
<div id="button_display">
<span>Click on the button below to start solving today puzzle! </span> </br>
<button id='go' onclick="draw();display_clues()">Go to today puzzle</button> </div>
<div id="puzzle">
<table><tr>
<td class="panel"><div id="clues"> </div> </td>
<td class='panel' id='crossword_display'>
<div id="crossword"> </div> <div id="sbutton"></div><div id='result_message'></div></td>
</tr></table> 
</div>
</body>

</html>