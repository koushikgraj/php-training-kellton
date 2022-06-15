<?php 
  class Bike 
  {
      public $color;
      public $cc;

      public function start()
      {
          echo "to start bike press power button.<br>";
      }


      public function stop()
      {
          echo "to stop bike press break pedal.<br>";
      } 

public function ride()
{
    echo "I love travelling.<br>";
} 


public function break()
{
    echo "Just stop.<br>";
} 
      
}

$uni = new Bike();
$uni->start();
$uni->stop();
$uni->ride();
$uni->break();
?>