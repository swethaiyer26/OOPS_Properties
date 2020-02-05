<html>
<head>
<script>
function showResult(str) {
    if(str.length == 0) {
document.getElementById("Livesearch").innerHTML="";
document.getElementById("Livesearch").style.border="0px";
return;
    }
    
    if(window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    }
    else
    xmlhttp=new ActivexObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function() {
    if(this.readyState==4 && this.status==200) {
        document.getElementById("Livesearch").innerHTML=this.responseText;
        document.getElementById("Livesearch").style.border="1px solid #A5ACB2";
    }
}

xmlhhtp.open("GET","Livesearch.php?q"= + str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<form>
<input type="text" size="30" onekeyup="showResult(this.value)">
<div id="Livesearch"></div>
</form>
</body>
</html>