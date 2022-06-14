<?php
 abstract class Test1
 {
    
     abstract protected function Add($a,$b);
     
 }

  class Test2 extends Test1
  {
    public function Add($a,$b)
    {
       
       echo "Addition of two number is :".$a + $b;
    }
  }

  $obj = new Test2();

  $obj->Add(12,34);


?>