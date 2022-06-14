<?php

$con=new mysqli('localhost','root','','crud');

if($con){
	echo "connection sucessfull";

}
else{
	die(mysqli_error($con));
}
?>