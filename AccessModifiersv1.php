<?php
class Fruit {
    public $name;
    protected $weight;
    private $color;


function set_name($n){
    $this->name=$n;
}

protected function set_weight($n) {
    $this->weight=$n;

}

private function set_color($n) {
    $this->color=$n;
}

}
$mango=new Fruit();
$mango->set_name('mango');
$mango->set_weight('200');
$mango->set_color('yellow');
?>
</body>
</html>