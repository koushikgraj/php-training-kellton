<?php
class Number{

var $a;
var $b;

public function addNumber()
{
	return $this->a + $this->b;
}
}
$obj = new Number();
$obj->a=100;
$obj->b=200;
echo $obj->addNumber();
?>