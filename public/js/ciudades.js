function showUser(str) {
    if (str == "") {
        document.getElementById("ciudades").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ciudades").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../province/provinces.php?q="+str,true);
        xmlhttp.send();
    }
}


function showUser2(str) {
    if (str == "") {
        document.getElementById("ciudades2").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ciudades2").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../province/provinces.php?q="+str,true);
        xmlhttp.send();
    }
}
