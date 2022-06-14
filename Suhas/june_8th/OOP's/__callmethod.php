<?php
   class Demo 
   {
       //call method  is used for calling private and unexisting methods.
       private $bike;
       private $mileage;

       private function rider($name,$avg)
       {
           $this->bike = $name;
           $this->mileage = $avg;
       }

       public function __call($method,$args)
       {
           echo "It is calling private method. <br><br>";
            echo "The name of method is : $method"."<br>";
            echo "<pre>";
            echo print_r($args);
            echo "</pre>";
       }
   }

   $obj = new Demo();
   $obj->rider("Unicorn","60kmpl");

?>
