<?php
$Name = $_POST['name'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$Mobile = $_POST['mobile'];

$con=new mysqli('localhost','root','','p12');

if($con->connect_error){
	die('connection failed : '.$conn->connect_error);

}
else{
	$stmt = $conn->prepare("insert into p12("name","email","address","mobile")
		values(?,?,?,?)");
	$stmt->bind_param("ssss",$name,$email,$address,$mobile);
	$stmt->execute();
	echo "connection successfully";
	$stmt->close();
	$conn->close();
}
?>