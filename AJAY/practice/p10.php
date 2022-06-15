<?php
class  Vehicle{
	
	 public function __construct(){
	echo 'ajay kumar';
	}

	
	function startIt(){
		

		echo'<h3>vehicle is started...</h3>';
	}


	function stoptIt(){
		

		echo'<h3>vehicle is stopped...</h3>';
	}

	function __destruct(){
	echo 'end';
	}
	function example(){
	echo 'welocome to my world';
	}
$bike = new Vehicle();
echo $bike->example();
echo '<br>';
echo '<br>';
echo $bike->startIt();
echo $bike->startIt();
echo $bike->stoptIt();
echo $bike->stoptIt();



?>