<!-- ----------- Add numbers ------------ -->
<?php

    class Add{
        public $a;
        public $b;

        function addNumber($x,$y){
          $this->a = $x;
            $this->b = $y;
            return $this->a + $this->b;

        }


       
    }

    $obj = new Add();
    $res =  $obj->addNUmber(10,20);
    echo " The addition of " .$obj->a. "and" .$obj->b. "is" .$res;



?>



