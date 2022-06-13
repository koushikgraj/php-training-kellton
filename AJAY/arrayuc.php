<?php
$input_array = array("AJay" =>2,"kumar" =>8);
print_r(array_change_key_case($input_array,CASE_UPPER));
$input_array = array("AJay" =>2,"kumar" =>8);
print_r(array_change_key_case($input_array,CASE_LOWER));

$records = array(
	array(
'id'=>7078,
'first_name'=>'AJAY',
'LAST_NAME' =>'KUMAR',
));
$first_names = array_column($records, 'first_name');
print_r($first_names);
$last_names = array_column($records, 'last_name', 'id');
print_r($last_names);
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);

$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
?>