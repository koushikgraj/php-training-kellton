<?php
interface test{
    function cal($a,$b);

}
interface test1{
    function sub($a,$b);

}

class test2 implements test,test1{
    public function cal($a,$b){
        echo $a+$b;
    }
    public function sub($a,$b){
        echo $a-$b;
    }
}
$t1=new test2();
$t1->cal(10,20); 
$t1->sub(10,20); 
?>