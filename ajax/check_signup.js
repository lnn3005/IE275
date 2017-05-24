var check_e = 0;
var check_p = 0;
var check_u = 0; 
function validate_e() {
    var email = document.getElementById('email').value;
    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var result = xmlhttp.responseText;
			if (result.trim() == "0".trim()){
			    document.getElementById('email_noti').innerHTML = " Please enter an email address";
				check_e = 0;
				}
			else if (result.trim() == "1".trim()) {
				check_e = 1;
				document.getElementById('email_noti').innerHTML = "";
				} 
			else if (result.trim() == "2".trim()) {
			    check_e = 0;
			    document.getElementById('email_noti').innerHTML = " Email already existed";
            }
        }			
    }
    
    xmlhttp.open("GET", "check_email.php?email="+email, true);
    xmlhttp.send();
}

function validate_p() {
    var psw = document.getElementById('password').value;
	if (psw.length < 5) {
	    document.getElementById('psw_noti').innerHTML = " Must contain at least 5 characters";
		check_p = 0;
	    }
	else {
	    document.getElementById('psw_noti').innerHTML="";
		check_p = 1;
		}
}

function validate_u() {
    var username = document.getElementById('username').value;
    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var result = xmlhttp.responseText;
			if (result.trim() == "0".trim()){
			    document.getElementById('user_noti').innerHTML = " Please enter a username";
				check_u = 0;
				}
			else if (result.trim() == "1".trim()) {
				check_u = 1;
				document.getElementById('user_noti').innerHTML = "";
				} 
			else if (result.trim() == "2".trim()) {
			    document.getElementById('user_noti').innerHTML = " Username already existed";
				check_u = 0;
            }
        }			
    }
    
    xmlhttp.open("GET", "check_username.php?username="+username, true);
    xmlhttp.send();
}

function validate() {
    validate_e();
    validate_p();
    validate_u();
    if (check_e == 1 && check_p == 1 && check_u == 1) {
        document.forms["myform"].submit();
        }
}    	