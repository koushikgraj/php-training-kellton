<?php
trait state1 {
  public function company1() {
    echo "<br>lunch is available! ";
  }
}
  trait state2 {
  public function company2() {
    echo "<br>lunch and dinner is available!";
  }
  
}

class food{
  use state1;
}

class fastfood{
    use state2;
}
$obj1 = new food();
$obj2=new fastfood();
$obj1->company1();
echo"<br>";
$obj2->company2();
?>
