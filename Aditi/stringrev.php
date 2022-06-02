<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String reverse</title>
</head>
<body>
	<?php
		 $string = "Hello World";
 		 $string_lenght = 0;
    	while($string[$string_lenght] != null)
    	{
        	$string_lenght++;
   		 }

    echo "Total String Length : ". $string_lenght;

    echo "<br>";

		echo reverse_string($string);
 
function reverse_string($string) {
    $i = 0;
    while ($string[$i]) {
        $i++;
    }
    for ($j = 0;$j < $i/2;$j++) {
        $temp = $string[$j];
        $string[$j]=$string[$i-1-$j];
        $string[$i-1-$j] = $temp;
    }
    return $string;
}
?>
</body>
</html>
