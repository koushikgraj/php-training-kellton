<?php
class Student{
	
	private $age;

	public function __construct($age)
	{
		$this->age = $age;
	}

	

	public function message()
	{
		$obj = "<{$this->age}";
		
		return $obj;
	}
}
?>