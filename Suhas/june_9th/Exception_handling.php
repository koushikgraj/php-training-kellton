<?php
  class Trial extends exception
 {
     

        var $arr = [1,2,3,5,6,4,7];
        //$count =
        public function testing()
        {
            try {
            for($a = 0; $a<count($this->arr); $a++)
            {
                echo $this->arr[3];

                throw new exception ('index out of bond');
            }
           }
        catch(exception $e){
            echo "array out of index bond ".$e->getMessage(); 
      }
        
     }
     
 }

 $obj = new Trial();
 $obj->testing();
?>