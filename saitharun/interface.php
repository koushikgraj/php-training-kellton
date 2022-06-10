<?php
interface Bike {
  public function showbikecc();
}

class KTM implements Bike {
  public function showbikecc() {
    echo "RC200";
  }
}

$bike = new KTM();
$bike->showbikecc();
?>