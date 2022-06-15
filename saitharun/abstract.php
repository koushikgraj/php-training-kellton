<?php
abstract class sai
{
    
    abstract protected function demo($fcolour,$fruit);

}

 class red extends sai
 {
     public function demo($fcolour,$fruit)
     {
         
        echo  "$fcolour ,$fruit"; 
     }
 }

  $obj = new red();

  $obj->demo("red","apple");


  ?>