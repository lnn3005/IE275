<?php
$link = mysqli_connect('localhost', 'root', 'Cross1', 'crossword');
    if (mysqli_connect_errno($link)){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

$solution = mysqli_query($link, "SELECT * FROM CrossWordSolution");
            $solutionArray = array();
            $j = 1;
            
            while($row = mysqli_fetch_array($solution))
            {
			    for ($i=1; $i<16; $i++) {
				    //$solutionArray[$j][$i] = $row[$i];
					if ($row[$i] == '2' ||  $row[$i] == null) {
				        echo $j;
						echo ",";
				        echo $i;
						echo ",";
						}
					}
                $j++;
            }


?>			