<html>
<head>
<script>
function getVote(int) {
    if(window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else { 
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange= function() {
         this.readyState== 4 && this.status==200{
             document.getElementById("poll").innerHTML=this.responseText;
         }
    } 
    xmlhttp.open("GET","poll_vote.php?vote= +int,true");
    xmlhttp.send();
}
</script>
</head>
<body>

<div id="poll">
<h3>Do you like PHP or AJAX</h3>
<form>
Yes:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>NO:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>
</body>
</html>