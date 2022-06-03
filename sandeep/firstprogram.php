<?php
class mul{
      var $x;
     var $y;
      function message(){
        echo $this->x*$this->y;
         

        
       }
}
$obj=new mul();
$obj->x=20;
$obj->y=30;
$obj->message();
?>


