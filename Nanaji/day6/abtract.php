<?php
abstract class Parent1{
    abstract function func();
}
class Child extends Parent1{
    function name(){
        echo "This is child class of abstract";
    }
    function func(){
        echo "abtract class";

    }
}
$obj=new Child();
$obj->func();
$obj->name();
?>