<?php
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
$obj->x= 5
$obj->y = 30;

echo $obj->addnumbers();

?>