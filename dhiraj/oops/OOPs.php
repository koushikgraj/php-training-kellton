<?php
class Car{

    public $color ='red';
    public $cc =150;

    public function start(){
        return "You  can start red the bike.";
    
    }

    public function stop(){
        echo "You  can stop the bike.";
    }

    public function ride(){
        echo "You  can ride on the bike.";
    }

    public function break(){
        echo "You  can take a break.";
    }
}


$obj =new Car();
echo $obj -> start();
 echo "<br>";
 $obj -> stop();
 echo "<br>";
 $obj -> ride();
 echo "<br>";
 $obj -> break();


?>
