<?php
class Number
{
	var $a;
	var $b;
	public function divNumber()
	{
	return $this->a / $this->b;
	}
}
$obj=new Number;
$obj->a=50;
$obj->b=10;
echo $obj->divNumber();
?>