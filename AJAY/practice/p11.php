<?php
echo '<h2>Abstract class</h2>';

abstract class vehicle{
	public $brand = 'BMW';
	abstract protected function display(){
		
	}
}
class car extends vehicle{
	public function changebrand($b)
	{
		$this->brand =$b;
	}
	public function display()
	{
	return 'car brand is'.$this->brand;
}}
//$obj = new vehicle();
//echo $obj->display();
echo '<br>';
$mycar = new car();
$mycar->changebrand('audi');
echo $mycar->display();
?>