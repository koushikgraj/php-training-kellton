<?php
class AddNum{

var $a;
var $b;
public function Addition(){
    return $this ->a + $this ->b;
}
}
$obj=new AddNum();
$obj->a=100;
$obj->b=300;
echo "Addition of the numbers are:- ". $obj ->Addition();
?>