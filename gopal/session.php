<?php
session_start();
//set session variables
$_SESSION["name"]="gopal";
$_SESSION["email"]="gopal@gmail.com";
echo "session variables are set.";
?>