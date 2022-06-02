<?php
class NumberCalc{
	var $a;
	var $b;
	
	public function addNumbers()
	{
		return $this->a + $this->b;
	}
}

$obj = new NumberCalc();
$obj->a = 100;
$obj->b = 200;
echo $obj->addNumbers();
?>