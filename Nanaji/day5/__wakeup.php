<?php
class Student{
    public $name;
    public $rollnum;
    public function __wakeup(){
        echo "wakeup magic method";
    }
}
$obj=new Student();
echo $obj->__wakeup();
?>