<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public $weight;
  public function __construct($name,$color,$weight) {
  $this->name=$name;
  $this->color=$color;
  $this->weight=$weight;
    //echo "Am I a fruit or a berry? "; 
   // $this->intro();
  }

  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color} and the weight is {$this->weight} ."; 
  }
}

$strawberry = new Strawberry("Strawberry", "red","60");
//$strawberry->message();
$strawberry->intro();
?>
 
</body>
</html>

