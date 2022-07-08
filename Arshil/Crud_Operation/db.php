<?php
$servername="localhost";
$username="root";
$password="";
$servername="crud";

$conn=new mysqli('localhost', ' ', ' ', 'crud');

if(!$conn){
    die("Sorry we failed to connect to the database:".mysqli_connect_error());
}
else{
    echo"Connection was Sucessfull !<br>";
}
?>