<?php
trait message1 {
  public function university() {
    echo "<br>OOP is fun! ";
  }

  public function func() {
    echo "T1:func ";
  }
}

trait message2 {
  public function college() {
    echo "<br>OOP reduces code duplication!";
  }
  public function func() {
    echo "T2:func ";
  }
}

class Welcome {
  use message1;
}

class Welcome2 extends Welcome {
  use message1, message2;
}


$obj = new Welcome();
$obj->university();
echo "<br>";

$obj2 = new Welcome2();
$obj2->college();
$obj2->msg2();
?>