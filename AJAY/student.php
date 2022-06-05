<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		student 
	</title>
</head>
<body>
<?php
      class student
      {
      	public $name;
      	public $rollno;
      	public $mobile;

     function _construct($name,$rollno,$mobile){

     $this-> name= $name;
     $this-> rollno= $rollno;
     $this-> mobile= $mobile;
      }
public function all(){
	return "i am".$this->name.   "having rollno". $this->rollno.    "form mobile".$this->mobile;
}
}
$ginstudent = new student('ajay',65,8008897383);
echo $ginstudent ->all();
?>

</body>
</html>