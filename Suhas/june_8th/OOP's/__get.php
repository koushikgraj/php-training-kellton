<?php
class Student {
    public $data = array();
	
	public $test;
 
    public function __set($name, $value) 
    {
       // $this->data[$name] = $value;
		echo $name . " is  ".$value,"<br>";
    }
 
    public function __get($name) 
    {
        If (isset($this->data[$name])) {
            return $this->data[$name];
        }
		else{
			echo '<br>'.$name.' variable does not exists';
		}
    }
}
 
$objStudent = new Student();
 
//  __set() called
$objStudent->phone = '0491 570 156'; 

$objStudent->test= "Debendra";

$objStudent->test123= "ABCD";
 
//  __get() called
echo $objStudent->phone;  

//print_r($objStudent->data);
?>