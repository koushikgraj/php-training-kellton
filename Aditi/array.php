<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body>
	<?php

	//	INDEXED ARRAY
		$books = array("Computer", "database", "operating", "english");	
		echo "i like " . $books[0]. "," . $books[1]. "," . $books[2]  ;

		$arrlength = count($books);
		for($x=0; $x<$arrlength; $x++)
		{
			echo $books[$x];
		echo("<br>");
		}
	/*
		sort($books);
		$clength = count($books);
		for($x=0; $x<$clength; $s++)
		{
			echo $books[$x];
			echo("<br>");
		}
	*/
		
	//	ASSOCIATED ARRAY	

		$age = array("Aditi" => "21", "Aditya" => "20", "hello" => "30");
		echo "age is " . $age['Aditi']. "years". "<br>";
		

	//MULTIDIMENSIONAL ARRAY	

		$cars = array(
			array("volvo", "22", "18"),
			array("BMW", "30", "24"),
			array("wagonar", "27", "18"),
		);

		echo $cars[0][0]. ":". "in stock ". $cars[0][1]. "sold ". $cars[0][2]. "<br>";
		echo $cars[2][0], ":". "in stock ". $cars[2][1]. "sold ". $cars[2][2]. "<br>";


	?>

</body>
</html>