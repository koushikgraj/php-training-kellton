<?php
abstract class parents{
    public function sub($a,$b){
        echo $a-$b;
    }
    abstract public function cal($a,$b);

}
class child extends parents{
    public function cal($a,$b){
    echo $a+$b."<br>";
    }
}
$obj=new child();
// $obj-new parents();
$obj->cal(20,30);
$obj->sub(20,30);
?>