<?php
$var1 = 'test';
var_dump(isset($var1));

echo "<br>";
?>



<?php

$str = "i am virendra ";

// Check value of variable is set or not
if(isset($str)) {
	echo "Value of variable is set";
}
else {
	echo "Value of variable is not set";
}

$arr = array();

// Check value of variable is set or not
if( !isset($arr[0]) ) {
	echo "\nArray is Empty";
}
else {
	echo "\nArray is not empty";
}

?>
