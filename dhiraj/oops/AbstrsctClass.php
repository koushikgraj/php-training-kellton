<?php

abstract class Car {
     $name;
 function __construct($name) {
        $this->name = $name;
      }
}


class Audi extends Car {
     function intro() : string {
      return "This is $this->name";
    }
}

$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

?>