function draw() {
	document.getElementById("button_display").innerHTML="";
	var xmlhttp;
	var black=new Array();
	var str;
	
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

	xmlhttp.open("GET", "draw.php", false);
    xmlhttp.send();
	str = xmlhttp.responseText;
	
	black = str.split(",");
	//alert(str);
	//alert(black);
    
	
	var count=0;
	var string="<table class='display'>";
    for (var i=1; i<16; i++) {
		string = string + "<tr>";
		for (var j=1; j<16; j++) { 
		    if (i==black[count] && j==black[count+1]) {
			    string = string + "<td><input class='black' readonly value='2' type='text' id='a[" + i + "][" + j + "]' maxlength=1 ></td>";
				count+=2;
			    }  
			else {
			    string = string + "<td><input class='count' type='text' id='a[" + i + "][" + j + "]' maxlength=1 ></td>";
			    }
			}
		string = string + "</tr>";
		}
	string = string +"</table>";
	document.getElementById("crossword").innerHTML = string;
	
	
	document.getElementById("sbutton").innerHTML = "<br><br><button id='submit' onclick='check()'>Check your answers</button>";
	}
	
function display_clues() {
    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("clues").innerHTML = xmlhttp.responseText; 
            }			
    }
	
    
    xmlhttp.open("GET", "clues.php", true);
    xmlhttp.send();
	}
	
function check() {
    //alert(document.getElementById('a[1][6]').value);
	//alert('Your answers are incorrect');
	document.getElementById('result_message').innerHTML = 'Your answers are incorrect';
	}

			