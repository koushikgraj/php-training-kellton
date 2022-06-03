<?php
class addition{
var $a;
var $b;
function sum(){
echo $this->a+$this->b;
}
}
$obj=new addition();
$obj->a=20;
$obj->b=30;
$obj->sum();
?>
