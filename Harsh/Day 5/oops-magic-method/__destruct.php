<?php
class abc{
    //creating contructor it will call itself
    public function __construct(){
        echo"this is a construct function";
    }
     //this will also call itself after execution at the end this will run 
     public function __destruct(){
        echo "this is a destruct function";
    }
    //creating random function which has to be called by creating object
    public function hello(){
        echo "hloo every one";
    }
    
}
$obj = new abc();
$obj->hello();
?>