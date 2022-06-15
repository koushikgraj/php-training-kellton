<?php

 $db = mysqli_connect("localhost","root","","p12");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD</title>
</head>
<body>
     <form  action="connect.php" method="POST">
     	<label>Name</label>
     	<input type="text" name="name" placeholder="Enter Name">
     	<br><br>
     	<label>Email</label>
     	<input type="email" name="email" placeholder="Enter Email">
     	<br><br>
     	<label>Address</label>
     	<input type="text" name="address" placeholder="Enter Address">
     	<br><br>
     	<label>Mobile</label>
     	<input type="mobile" name="mobile" placeholder="Enter Mobile ">
     	<input type="submit" name="submit" value="submit">
     </form>
</body>
</html>

<?php
if(isset($_POST['sumbmit']))
{
	$name = $_POST['name'];
	$email =$_POST['email'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];

	$qry = "insert into user values(null,'$name','$email','$address','$mobile')";
	if (mysqli_query($db,$qry)) {
		echo '<script>alert("user registred sucessfully.");</script>';
		header('location: p12.php');

		// code...
	}else{
		echo mysqli_error($db);
	}
}



?>