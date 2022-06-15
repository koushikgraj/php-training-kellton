<?php
interface Nanaji {
  public function topper();
}

class classfirst implements Nanaji {
  public function topper() {
    echo "topperrrrr";
  }
}

$Nanaji = new classfirst();
$Nanaji->topper();
?>