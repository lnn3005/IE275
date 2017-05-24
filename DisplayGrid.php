<html>
    <body>
        <div>
            <?php
            $link = mysqli_connect('localhost', 'crossword', 'ie275', 'crossword);
            
            if (mysqli_connect_errno($link))
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
            $rowsCols = $_POST['rowsCols'];
            $totalClues = $_POST['totalClues'];
            
            echo "Fill in the grid below with the puzzle solution";
            echo "<br>";
            echo "When you are finished entering the solution, enter the clues and click the submit button.";
            echo "<br>";
            echo "Enter a 2 where a black box should appear";
            
            echo "<form method='POST' action = 'SubmitPuzzle.php'>";
                
            for($i = 0; $i < $rowsCols; $i++)
            {
                for($j=0; $j < $rowsCols; $j++)
                {
                    echo '<input type="text" name="L[]" size=1>';
                }
                echo "<br>";
            }
            echo "<br>";
            echo "Please enter the clues below";
            echo "<br><br>";
            for($i=0; $i < $totalClues; $i++)
                {
                    echo "Clue #: ";
                    echo '<input type="text" name="number[]" size=2>';
                    echo '<input type="radio" name="type[]" value="0">';
                    echo "Across";
                    echo '<input type="radio" name="type[]" value="1">';
                    echo "Down";
                    echo "<br>";
                    echo "Clue: ";
                    echo '<input type="text" name="clues[]" size=30>';
                    echo "<br>";
                    echo"<br>";
                }

            echo "<br>";
            echo '<input type="submit" value="Submit Puzzles and Clues">';
            echo "</form>";
                
            
            mysqli_close($link);
            ?>
        </div>
        
    </body>
</html>