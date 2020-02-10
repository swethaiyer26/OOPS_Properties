<?php
class pi {
    public static $value=3.14159;
    public function staticvalue() {
        return self::$value;
    }
}
$pi=new pi();
echo $pi->staticValue();
?>