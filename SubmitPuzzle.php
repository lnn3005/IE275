<html>
    <body>
        <div>
        <?php
            $link = mysqli_connect('localhost', 'crossword', 'ie275', 'crossword');
            
            if (mysqli_connect_errno($link))
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
            $puzzleSolution = $_POST['L'];
            $clueNumber = $_POST['number'];
            $clueType = $_POST['type'];
            $clues = $_POST['clues'];
            $numberClues = count($clues);
            $clueSize = count($puzzleSolution);
            $puzzleCols = sqrt($clueSize);
            
            $clueNumberAcross = array();
            $clueTypeAcross = array();
            $cluesAcross = array();
            $clueNumberDown = array();
            $clueTypeDown = array();
            $cluesDown = array();
            
            for($i=0; $i<$numberClues; $i++)
            {
                if($clueType[$i] == 0)
                {
                    $clueNumberAcross[$i] = $clueNumber[$i];
                    $clueTypeAcross[$i] = $clueType[$i];
                    $cluesAcross[$i] = $clues[$i];
                }
                else if($clueType[$i] == 1)
                {
                    $clueNumberAcross[$i] = $clueNumber[$i];
                    $clueTypeAcross[$i] = $clueType[$i];
                    $cluesAcross[$i] = $clues[$i];
                }
            }
            

            $sql="CREATE TABLE userpuzzle (one VARCHAR(1), two VARCHAR(1), three VARCHAR(1), four VARCHAR(1), five VARCHAR(1), six VARCHAR(1), seven VARCHAR(1), eight VARCHAR(1), nine VARCHAR(1), ten VARCHAR(1), eleven VARCHAR(1), twelve VARCHAR(1), thirteen VARCHAR(1), fourteen VARCHAR(1), fifteen VARCHAR(1))";

            if (mysqli_query($link,$sql))
            {
                echo "Table userpuzzle created successfully";
                echo "<br>";
            }
            else
            {
                echo "Error creating table: " . mysqli_error();
                echo "<br>";
            }
            
            $sql1="CREATE TABLE useranswers (AcrossClueNo VARCHAR(3),AcrossClue VARCHAR(40),DownClueNo VARCHAR(3),DownClue VARCHAR(40))";
            
            if (mysqli_query($link,$sql1))
            {
                echo "Table useranswers created successfully";
                echo "<br>";
            }
            else
            {
                echo "Error creating table: " . mysqli_error();
                echo "<br>";
            }
            
            $i=0;
            $x=0;
            
            $a=0;
            $b=1;
            $c=2;
            $d=3;
            $e=4;
            $f=5;
            $g=6;
            $h=7;
            $i=8;
            $j=9;
            $k=10;
            $l=11;
            $m=12;
            $n=13;
            $o=14;
            
            while($x<$puzzleCols)
            {
                mysqli_query($link,"INSERT INTO userpuzzle (one, two, three, four, five, six, seven, eight, nine, ten, eleven, twelve, thirteen, fourteen, fifteen)
                VALUES (
                '$puzzleSolution[$a]', '$puzzleSolution[$b]', '$puzzleSolution[$c]',
                '$puzzleSolution[$d]', '$puzzleSolution[$e]', '$puzzleSolution[$f]',
                '$puzzleSolution[$g]', '$puzzleSolution[$h]', '$puzzleSolution[$i]',
                '$puzzleSolution[$j]', '$puzzleSolution[$k]', '$puzzleSolution[$l]',
                '$puzzleSolution[$m]', '$puzzleSolution[$n]', '$puzzleSolution[$o]')");
                $a+=15;
            $b+=15;
            $c+=15;
            $d+=15;
            $e+=15;
            $f+=15;
            $g+=15;
            $h+=15;
            $i+=15;
            $j+=15;
            $k+=15;
            $l+=15;
            $m+=15;
            $n+=15;
            $o+=15;
                $x++;
            }
            
            
            for($x=0; $x<count($clueNumberAcross); $x++)
            {
                mysqli_query($link,"INSERT INTO useranswers (AcrossClueNo, AcrossClue, DownClueNo, DownClue)
                VALUES ('$clueNumberAcross[$x]', '$cluesAcross[$x]',
                '$clueNumberDown[$x]' , '$cluesDown[$x]')");
            }
            
            mysqli_close($link);
            ?>
        </div>
        
    </body>
</html>