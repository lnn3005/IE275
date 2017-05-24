<?php
    $link = mysqli_connect('localhost', 'root', 'Cross1', 'crossword');
            
    if (mysqli_connect_errno($link)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
            
    $clues1 = mysqli_query($link,"SELECT * FROM Level1Clues");
	
	$numberArray = array();
    $clueArray = array();
    $answerArray = array();
    $answerSizeArray = array();
    $clueTypeArray = array();
    $x = 1;
	
	while($row = mysqli_fetch_array($clues1)) {
        $numberArray[$x] = $row['Number'];
        $clueArray[$x] = $row['Clue'];
        $answerArray[$x] = $row['Answer'];
        $answerSizeArray[$x] = $row['AnswerSize'];
        $clueTypeArray[$x] = $row['ClueType'];
		$x++;
    }
	
	$x = rand(1,$x);
	
	echo $numberArray[$x]."+".$clueArray[$x]."+".$answerArray[$x]."+".$answerSizeArray[$x]."+".$clueTypeArray[$x];
	?>