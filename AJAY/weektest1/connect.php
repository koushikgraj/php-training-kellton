<?php
$con=new mysqli('localhost','root','','weektest');

if($con){
	echo "registration successfully";
}
else{
	die(mysqli_error($con));
}
?>