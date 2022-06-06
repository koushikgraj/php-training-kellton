<?php
$a="Dhiraj";
echo"<pre>";
print_r(str_split($a));
echo"</pre>";


echo"<br>";
echo chunk_split($a,1,".");

echo"<br>";
echo strtoupper($a);

echo"<br>";
echo strtolower($a);

echo"<br>";
echo strrev($a);

echo"<br>";
echo strlen($a);

echo"<br>";
echo strtr($a,"D","N");

echo"<br>";
echo substr($a,3);

echo"<br>";
echo str_shuffle($a);

echo"<br>";
echo str_repeat($a,5)

?>