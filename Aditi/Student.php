<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>construction</title>
</head>
<body>
	<?php
	class Student{
		public $name;
		public $rollno;
		public $loc;
	

	function __construct($name, $rollno, $loc){
		$this ->name = $name;
		$this ->rollno = $rollno;
		$this ->loc = $loc;
	}

	 public function all(){
		return "i am ". $this->name . " having rollno. ". $this->rollno . " from ". $this->loc ;
	}
}


	$gniStudent = new Student('aditi', 65, 'mtr');
	echo $gniStudent ->all();

	?>

</body>
</html>