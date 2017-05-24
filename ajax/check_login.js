function check_login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("login_error").innerHTML = xmlhttp.responseText;
			if (xmlhttp.responseText.trim() == "Login successful".trim()) {
				document.forms["myform"].submit();
				} 
            }			
    }
    
    xmlhttp.open("POST", "check_login.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("username=" + username + "&password=" + password);
}
	//window.location.href="home.php";
