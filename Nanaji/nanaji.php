<?php
class Solution{
   var $a;
   var $b;
    function addnum(){
    
        return $this->a+$this->b;    
    }
    
}
$obj=new Solution();
$obj->a = 10;
$obj->b=20;
echo $obj->addnum();
?>