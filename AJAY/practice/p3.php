<?php
class Number
{
	var $a;
	var $b;
	var $c;
	public function multiNumber(){
	return $this->a * $this->b * $this->c;
	}
}
$obj=new Number;
$obj->a=5;
$obj->b=5;
$obj->c=5;
echo $obj->multiNumber();
?>