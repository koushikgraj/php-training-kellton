<?php
trait fruits {
  public function m1() {
    echo "<br>OOP is fun! ";
  }
  
}
  

trait veg{
  public function m2() {
    echo "<br>OOP reduces code duplication!";
  }
  
}

class  A{
  use m1,m2;
}

$obj = new A();
$obj->m1();
$obj->m2();
?>