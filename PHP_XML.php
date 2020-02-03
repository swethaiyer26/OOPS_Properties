<html>
<body>
<?php
$myXMLData=
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>arvind</to>
<from>swetha</from>
<heading>reminder</heading>
<body>dont forget to take  ME THIS WEEKEND!</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("cannot load xml data");
print_r($xml);
?>
</body>
</html>

