<html>
<body>
<?php
$xml=simplexml_load_file("book.xml") or die ("failed to load");
echo $xml ->book[0]->year . "<br>";
echo $xml ->book[1]->price . "<br>";
echo $xml ->book[2]->author;
?>
</body>
</html>



<html>
<body>
<?php
$xml=simplexml_load_file("book.xml") or die ("failed to load");
foreach($xml ->CHILDREN() AS $books)

echo $books->title . " , ";
echo $books ->author . " , ";
echo $books ->year . " , ";
echo $books ->price;
?>
</body>
</html>
