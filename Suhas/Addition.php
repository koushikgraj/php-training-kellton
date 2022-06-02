<?php


/*function AddNumbers()
{
      $a = 10;
      $b = 20;
      $c =  $a +  $b;
    echo "Addition of 10 + 20 is ".$c;
}
AddNumbers();


echo "<br>";*/

class Addition 
{
    var $x;
    var $y;

    function addnumbers()
    {
        return "addition of numbers is ".$this->x + $this->y;
    }
}

$obj = new Addition();
$obj->x= 25;
$obj->y = 30;

echo $obj->addnumbers();

?>