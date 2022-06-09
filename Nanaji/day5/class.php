<?php
class Bike{
    public $color="blue";
    public $cc="200";
    public function start(){
        echo "starting time:";

    }
    public function stop(){
        echo "stoping time:";

    }
    public function ride(){
        echo "riding time";
    }
    public function break(){
         echo "apply breaks";
    }
}
$obj=new Bike();
echo $obj->color;
echo "<br>";
echo $obj->cc;
echo "<br>";
echo $obj->start();
echo "<br>";
echo $obj->stop();
echo "<br>";
echo $obj->ride();
echo "<br>";
echo $obj->break();
?>