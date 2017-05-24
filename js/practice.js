var str = new Array();

function getInfo() {
    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    
    xmlhttp.open("GET", "practiceclues.php", false);
    xmlhttp.send();
	
	str = xmlhttp.responseText.split("+"); 
	}

var cluenumber = str[0];	
var clue = str[1];
var answer = str[2];
var size = str[3];
var type = str[4];

function display_clues() {

	document.getElementById("clues").innerHTML =str[1];
	document.getElementById('type').innerHTML = 'Clue type: ' + str[4];
	}

function draw() {

    var input = "<table><tr>"; 
    for (var i=0; i<str[3]; i++) {
	    input+= "<td><input class='count' type='text' id='a[" + i + "]' maxlength=1></td>";
		}
	input = input + "</tr></table>";
	document.getElementById("crossword1").innerHTML = input;
	document.getElementById("sbutton").innerHTML = "<br><br><button id='submit' onclick='check()'>Check your answer</button>";
	document.getElementById('result').innerHTML ="";
	}
	
function check() {
    var ua="";
    for (var i=0; i<str[3]; i++) {
	    ua = ua + document.getElementById('a[' + i + ']').value;
		}
    if (ua.toUpperCase().trim() != str[2].toUpperCase().trim()) {
	    document.getElementById('result').innerHTML = 'Your answer is incorrect!';
		}
	else {
	    document.getElementById('result').innerHTML = 'Your answer is correct! Well done!';
		}
	    
	}