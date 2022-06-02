<?
class Add{
    public $a;
    public $b;

      function addnumber($x,$y){

        $this->a = $x;
        $this->b = $y;
          return $this->a + $this->b;

      }
}

$obj  = new Add{};
$obj->a=10;
$obj->b=20;

?>