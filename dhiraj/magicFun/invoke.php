<?php

class MyClass
{
    public function __invoke()
    {
        echo 'Called to the __invoke method';
    }

     function abc(){
        echo 'simple function';
    }
}

$instance = new MyClass;
$instance();
$instance -> abc();
?>