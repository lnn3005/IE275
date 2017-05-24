<?php 
session_start();
include('include/config.php'); 
include('include/config2.php');
include('include/bar.htm');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Practice</title>
<script src="js/practice.js"></script>
<link rel="stylesheet" type="text/css" href="css/puzzle.css">
</head>

<body>
This is the practice page, where users can practice certain types of puzzle clues.
<table border="1">
<tr>
<th>Number</th>
<th>Clue Type</th>
<th>Explanation</th>
</tr>
<tr>
<td>1</td>
<td>Plural; Ending in S</td>
<td>The answers to these clues will almost always end in S.</td>
</tr>
<tr>
<td>2</td>
<td>..., as a,...</td>
<td>The answers to these clues will be based off of the last describing word(s)</td>
</tr>
<tr>
<td>3</td>
<td>Blanks; Example ____</td>
<td>The answer will be the missing word</td>
</tr>
<tr>
<td>4</td>
<td>Past Tense</td>
<td>The answer will usually end in ed or the past tense form of the word</td>
</tr>
<tr>
<td>5</td>
<td>E.G.</td>
<td>The answer will be an example of the clue</td>
</tr>
<tr>
<td>6</td>
<td>Facts / Knowledge</td>
<td>The answer is stricly based on the users knowledge of the clue</td>
</tr>
<tr>
<td>7</td>
<td>Quoted Clues</td>
<td>The answer will be a word or phrase in response or similar to the clue</td>
</tr>
</table>


<div id="button_display">
<span>Click on the button below to practice solving puzzles! </span> </br>
<button id='go' onclick="getInfo();draw();display_clues()">Go to next puzzle</button> </div>
<div id="puzzle">
<table><tr>
<td class="panel"><div id="clues"> </div> <div id='type'></div></td>
<td class='panel' id='crossword_display'>
<div id="crossword1"> </div> <div id="sbutton"></div><div id='result'></div></td>
</tr></table> 
</div>

</body>

</html>