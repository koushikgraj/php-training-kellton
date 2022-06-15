<?php

class Myname{
    public function getclassname(){
        return __CLASS__;
    }
}
$obj=new Myname();
echo $obj->getclassname();
?>