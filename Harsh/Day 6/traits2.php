<?php
trait test{
    public function cal($a,$b){
        echo $a+$b;
    }
}
    class test1{
        public function cal($a,$b){
            echo $a*$b;

        }
    }
    class test2 extends test1{
        use test;
        public function cal($a,$b){
            echo $a/$b;
        }

    }
    $obj = new test1();
    $obj->cal(10,7);

?>