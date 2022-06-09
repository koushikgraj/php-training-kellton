<?php

$num = 21;
var_dump(isset($num));

$arr = array(
		"a" => "Welcome",
		"b" => "to",
		"c" => "Kellton"
	);

var_dump(isset($arr["a"]));
echo "<br>";
var_dump(isset($arr["b"]));
echo "<br>";
var_dump(isset($arr["c"]));
echo "<br>";
var_dump(isset($arr["d"]));
echo "<br>";

?>
