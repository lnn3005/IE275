<html>
    <body>
        <div>
            <?php
                $link = mysqli_connect('localhost', 'root', 'Cross1', 'crossword');
            
            if (mysqli_connect_errno($link))
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
            $clues1 = mysqli_query($link,"SELECT * FROM Level1Clues");
            
            $numberArray = array();
            $clueArray = array();
            $answerArray = array();
            $answerSizeArray = array();
            $clueTypeArray = array();
            $x = 0;
            
            while($row = mysqli_fetch_array($clues1))
            {
                $numberArray[$x] = $row['Number'];
                $clueArray[$x] = $row['Clue'];
                $answerArray[$x] = $row['Answer'];
                $answerSizeArray[$x] = $row['AnswerSize'];
                $clueTypeArray[$x] = $row['ClueType'];
                $x++;
            }
            
            $clueCount = count($numberArray);
            //echo $clueCount;
            $clueOrder = array();

            
            for($x=0; $x < $clueCount; $x++)
            {
                $clueOrder[$x] = $x + 1;
                //echo $x." element = ".$clueOrder[$x];
                //echo "</br>";
            }
            
            shuffle($clueOrder);
            
            $initialClueOrder = array();
            
            $initialClueOrder = $clueOrder;
            //echo $initialClueOrder[0];
            $k=0;
            $z = 0;
            $count = 0;

            while($k < $clueCount)
            {
                echo "<form method='POST'>";
                echo $clueArray[$initialClueOrder[$k]] . " : ";
                
                for($j = 0; $j < $answerSizeArray[$initialClueOrder[$k]]; $j++)
                    {
                        echo '<input type="text" name="L[]" maxlength=1 size=1>';
                    }
                echo '<input type="submit" value="Check Answer">';
                echo "</form>";
                $userAnswers = $_POST['L'];
                //echo $userAnswers;
                //echo $answerArray[$initialClueOrder[$k]];
                if($userAnswers == $answerArray[$initialClueOrder[$k]])
                {
                    echo "</br>";
                    echo "That is correct!";
                    //echo $count;
                    $count = 0;
                    $k ++;
                    
                }
                else if($count == 0)
                {
                    //echo $count;
                    $count ++;
                    //echo $count;
                    break;
                }
                else if($userAnswers == $answerArray[$initialClueOrder[$k]] && $count!=0)
                {
                    echo "</br>";
                    echo "There are incorrect letters in your answer";
                    echo $count;
                    break;
                }
                
                //echo "</form>";
            }
            
            mysqli_close($link);
            ?>
        </div>
        
    </body>
</html>