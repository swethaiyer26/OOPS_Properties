<html>
<body>
<?php
$xml=simplexml_load_file("note.xml") or die("failed to load");
echo $xml -> to .  "<br>";
echo $xml -> from . "<br>";
echo $xml -> heading . "<br>";
echo $xml -> body;
?>
</body>
</html>