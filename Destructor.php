<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name,$color) {
    $this->name = $name; 
    $this->color=$color;
  }
  function __destruct() {
    echo "The fruit is {$this-> name} and the color is {$this-> color} . "; 
  }
}

$apple = new Fruit("Apple","Red");
echo "<br>";
$banana=new Fruit("Banana","yellow");
echo "<br>";
?>
 
</body>
</html>

