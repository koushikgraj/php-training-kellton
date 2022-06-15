<?php
$num1=array(1,3,2,5,2,4);
$num2=array(2,4,3,2,6,7);
$result=array_diff($num2,$num1);
print_r( $result);
echo "<br>";
sort($num2);
$arrlength = count($num2);
for($x = 0; $x < $arrlength; $x++) {
  echo $num2[$x];
  echo"<br>";
}
  $fruits = array("mango", "banana", "apple");
rsort($fruits);
$len = count($fruits);
for($x = 0; $x < $len; $x++) {
  echo $fruits[$x];
  echo "<br>";
}
  $a=array(6,3,1,1,3);
print_r(array_count_values($a));

?>