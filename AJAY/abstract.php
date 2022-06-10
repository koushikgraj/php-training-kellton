<?php
abstract class ajay{
	abstract function printdata();
	public function getdata();
	{
	echo "AJAY KUMAR";
	}
}
class child extends ajay{
	public function printdata()
	{
	echo "VAVILAPLLI";
	}
}
$obj = new child();
$obj->getdata();
?>