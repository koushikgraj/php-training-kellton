<?php
echo __LINE__."<br>";
echo __DIR__."<br>";
echo __FILE__."<br>";
function fun(){
    echo __FUNCTION__."<br>";
}
echo fun();
class Nani{
public function show(){
    echo __METHOD__."<br>";
    echo __CLASS__;
}


}
$obj=new Nani();
$obj->show();




    
?>    