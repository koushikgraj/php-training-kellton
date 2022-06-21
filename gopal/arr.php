<?php
$input = array("Neo","Morpheus","Trinity");
print_r($input);
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
echo "<br>";
print_r($result);
echo "<br>";
$a = array_fill(5, 3, 'banana');
print_r($a);
print_r(array_values($input));
echo "<br>";
print_r(array_reverse($input));
echo "<br>";
print_r(array_push($input,"gopal","rudru"));
echo "<br>";
print_r(array_slice($input,0,1));



?>