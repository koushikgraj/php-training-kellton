<?php
class emp{
    var $a;
    var $b;

function addNumber(){
    return $this->a + $this->b;
}
}
$obj = new emp();
$obj->a=10;
$obj->b=20;
echo "The value is :" .$obj->addNumber();
?>