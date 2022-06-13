<?php

class Myname{
    public function getclassname(){
        return __METHOD__;
    }
}
$obj=new Myname();
echo $obj->getclassname();
?>