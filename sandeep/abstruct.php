<?php
abstract class Test1
{
   
    abstract protected function sub($a,$b);
   
}

 class Test2 extends Test1
 {
   public function sub($a,$b)
   {
      
      echo "subtraction of two number is :".$a-$b;
   }
 }

 $obj = new Test2();

 $obj->sub(50,34);


?>