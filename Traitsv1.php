<?php
trait message1{
    public function msg1() {
        echo "OOPS is fun!";
    }
}

trait message2{
public function msg2() {
    echo "OOPS reduces duplication";
}
}

class Welcome {
    use message1 ;
}

class Welcome2 {
    use message1, message2;
}

$obj=new Welcome();
$obj->msg1();
echo "<br>";

$obj1=new Welcome2();
$obj1->msg1();
$obj1->msg2();
?>
