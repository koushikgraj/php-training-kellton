<?php
// app.php
use Tutsplus\Code as TC;
use Tutsplus\Code\Tutorial as Tutorial;

use Virendra  as V;

require "mylib.php";
require "kouLib.php";

// instantiate the Tutorial class with namespace alias TC
$objTutorial = new TC\Tutorial();

// instantiate the Tutorial class with class alias Tutorial
$objTutorial = new Tutorial();

// call the function
echo "<br>".TC\fooBar();

// display the constant
echo "<br>".TC\RECORDS_PER_PAGE;


$kouObj = new V\Tutorial();

echo "<br>".V\fooBar();

echo "<br>".V\RECORDS_PER_PAGE;

?>