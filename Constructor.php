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
  function get_name() {
    return $this->name;
  }
  function get_color() {
      return $this->color;
  }
}

$apple = new Fruit("Apple","red");
$grapes=new Fruit("Grapes","green");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo $grapes->get_name();
echo "<br>";
echo $grapes->get_color();

?>
 
</body>
</html>