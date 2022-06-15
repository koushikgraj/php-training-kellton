<?php
class person{
    public $name;
    public $age;
    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

function show(){
    echo $this->name.$this->age;
}
}
$p1=new person("harsh","20");
$p1->show();
?>