<?php
$a=array("name"=>"harsh","course"=>"php","age"=>"21");
print_r(array_change_key_case($a,CASE_UPPER));
echo "<br>";
// var_dump($a);
print_r(array_rand($a));
echo "<br>";
print_r(array_reverse($a));
echo "<br>";
$b=( array("cat"=>"wagon","foo"=>"baar"));
echo"<pre>";
print_r(array_merge($a,$b));


echo"</pre>";
echo "<br>";
print_r(array_keys($a));
echo "<br>";
print_r(array_key_last($a));
echo "<br>";



?>