<?php

interface Bike {
     function takeBreak($a,$b);
}

interface car{
    function takeBreak($a,$b);
}

class ktm implements Bike,car {
  function takeBreak($a,$b) {
    echo "FULL-BREAK $a   $b<br>";
  }
  function bike1(){
      echo "half Break";
  }
}

$Bike = new ktm(100,50);
$Bike->takeBreak();
$Bike->bike1();
?>