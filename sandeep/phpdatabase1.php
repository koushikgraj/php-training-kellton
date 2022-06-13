<?php
$servername = "localhost";
$username = "root";
$password = "";
try{



// Create connection
$conn = new PDO("mysql:host-$servername,dataname=phpdatabase1",  $username ,$password);


echo "Connected successfully";
}
catch(PDOException $e){
    echo"connection failed:".$e->getmessage();
}
?> 