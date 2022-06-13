<?php
class Number{
	var $a;
	var $b;
	public function subNumber()
	{
	return $this->a - $this->b;
	}
}
$obj = new Number;
$obj->a=400;
$obj->b=200;
echo $obj->subNumber();
?>