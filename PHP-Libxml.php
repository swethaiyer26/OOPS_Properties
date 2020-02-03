<html>
<body>
<?php

libxml_use_internal_errors(true);
$myxmldata=
"<?xml version='1.0' encoding='UTF-8'?>
<document>
<user>swetha</wronguser>;
<email>swetha@google.com</wrongemail>;
</document>";

$xml=simplexml_load_string($myxmldata);
if($xml==false) {
    echo "failed loading xml";
    foreach(libxml_get_errors() as $error) {
        echo "<br>" , $error -> message;
    }
}
else{
    print_r($xml);
}
?>
</body>
</html>