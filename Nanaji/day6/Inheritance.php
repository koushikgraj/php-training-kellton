<?php
interface Student{
    
    public function showname();

}
class Leader implements Student{
    public function showname(){
        echo "this is Inheritence";
    }

}
$obj=new Leader();
$obj->showname('nani');
?>