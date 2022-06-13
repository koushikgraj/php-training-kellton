<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$a="gopala krishna";
$b="rudru";
echo $a.$b;
echo "<br>";
echo strlen($a);
echo "<br>";
#echo strchop($a,"krishna");
echo "<br>";
echo strrev($b);
echo "<br>";
echo str_replace("krishna","rao",$a);
echo "<br>";
echo strtoupper("ram");
echo "<br>";
echo str_word_count("sam  ram");
echo "<br>";
echo strtolower("SYAM");
echo "<br>";

?>