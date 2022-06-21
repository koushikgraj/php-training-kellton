<?php
$a = [1,2,3,4,5];
echo "Prints the position = ".array_search(3,$a)."<br>";

$b =[4 , 5];
$c =array_replace($a ,$b);
echo "<pre>";
echo "<b>Replace</b>the 2nd array element from 1st array element <br>";
print_r($c);
echo "</pre>";
echo "<br>";

$d =[1,2,3,4,5,6,7,8];
array_pop($d);
echo "<pre>";
echo "<b>pop</b> will Delete last element <br>";
print_r($d);
echo "</pre>";
echo "<br>";

array_push($d , 11,22,33,44,55);
echo "<pre>";
echo "<b>push</b> will add element in last <br>";
print_r($d);
echo "</pre>";
echo "<br>";

array_shift($d);
echo "<pre>";
echo "<b>shift</b> will Delete very  first element <br>";
print_r($d);
echo "</pre>";
echo "<br>";


$e =['aa','bb','cc'];
$f=array_merge($d , $e);
echo "<pre>";
echo "<b>Merge</b> will merge the 1st arr to 2nd arr element <br>";
print_r($f);
echo "</pre>";
echo "<br>";

$g = array_slice($f , 1, 5);
echo "<pre>";
echo "<b>Slice</b> will removr the arr element from 1 to 5 length <br>";
print_r($g);
echo "</pre>";
echo "<br>";



?>

