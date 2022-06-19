<?php
// The parent class has hello method that returns "beep".
class Car {
	
  
  public function hello()
  {
    return "beep";
  }
}
 
//The child class has hello method that returns "Halllo"
class SportsCar extends Car {
	public function __construct($a = null, $b=null,$c=null)
  {
	  
  }
  public function hello()
  {
    return "Halllo";
  }
}
    
//Create a new object
$sportsCar1 = new SportsCar($a,$b,$c);
  
//Get the result of the hello method
echo $sportsCar1 -> hello();
?>