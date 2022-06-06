<?php
$str = addslashes('Do not "loose" hope!');
echo $str."<br>";

$str1 = addcslashes("never mind to things!","m");
echo $str1."<br>";

$str2 = "welcome to my world";
echo $str2."<br>";
echo chop($str2, "to my world")."<br>";

echo chr(97)."<br>";

echo strlen($str2)."<br>";

echo chunk_split($str2,2,"_")."<br";
?>