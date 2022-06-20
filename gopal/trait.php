<?php
trait message1 {
  public function msg1() {
    echo "<br>this is gopal! ";
  }
  
  public function func() {
    echo "T1:func ";
  }
}

trait message2 {
  public function msg2() {
    echo "<br>this is rudru!";
  }
  public function func2() {
    echo "T2:func2 ";
  }
}

class come {
  use message1;
}

class come2 extends come {
  use message2;
}


$obj = new come();
$obj->msg1();
echo "<br>";

$obj2 = new come2();
$obj2->msg2();
?>