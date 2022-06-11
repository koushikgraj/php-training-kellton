<?php
class Student {
    private $data = array();

    public function __set($name, $value) 
    {
		echo "Trying to access undefined variables";
        $this->data[$name] = $value;
		print_r($this->data);
    }
}

$objStudent = new Student();

//  __set() called
$objStudent->phone = '0491 570 156';
?> 