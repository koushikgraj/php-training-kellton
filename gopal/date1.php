<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Prints the day
echo date("l") . "<br>";
echo date("F"),"<br>";
echo date("M"),"<br>";
echo date("m"),"<br>";
echo date("n"),"<br>";


// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A") . "<br>";
?>