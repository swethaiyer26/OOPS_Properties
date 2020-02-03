<html>
<body>
<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("note.xml");
print $xmlDoc->saveXML();
?>
</body>
</html>


<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
  print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>
