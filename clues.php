<?php
            $link = mysqli_connect('localhost', 'root', 'Cross1', 'crossword');
            
            if (mysqli_connect_errno($link))
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
            $clues = mysqli_query($link,"SELECT * FROM CrosswordClues");
            
            
            echo"<table border=0>
            <tr>
                <th>Across Clue</th>
                <th></th>
                <th>Down Clue </th>
                <th></th>
            </tr>";
            
            while($row = mysqli_fetch_array($clues))
            {
                echo "<tr>";
                echo "<td>" . $row['AcrossClueNo'] . "</td>";
                echo "<td>" . $row['AcrossClue'] . "</td>";
                echo "<td>" . $row['DownClueNo'] . "</td>";
                echo "<td>" . $row['DownClue'] . "</td>";
            }
            echo "</table>";
            
            $solution = mysqli_query($link, "SELECT * FROM CrossWordSolution");
            $solutionArray = array();
            $x = 0;
?>