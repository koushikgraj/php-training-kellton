<?php
Interface MyInterface{
	public function getName();
	public function getAge();

}
class MyClass implements MyInterface{
	public function getName(){
	echo "My Name is AJAY". '<br>';
	}
	public function getAge(){
	echo " My Age 22";
	}
}
$obj = new MyClass;
$obj->getName();
$obj->getAge();
?>