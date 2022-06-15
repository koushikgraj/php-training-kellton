<?php
if(isset($_POST['submitbtn'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	
	$sql = "INSERT INTO student 
				(id, name, email, age, password)
				VALUES (NULL, '$name', '$email', '$age', '$password');";
	$qry = mysqli_query($conn, $sql);
	echo "<script>location.replace('list.php?action=add&status=success');</script>";
}
?>
<html>
	<head>
		<title>Add new student</title>
		<link rel="stylesheet" type="text/css" href="">
		<style>
			.loginbox{
				    width: 320px;
    				height: 420px;
    				background: darkseagreen;
    				color: black;
    				margin-top: 100px;
    				margin-left: 500px;
    				position: absolute;
   				    box-sizing: border-box;
			}
		</style>
	</head>
	<body>
		<div class="loginbox">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<center><h1 style="color: white;">LoginBox</h1></center>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" placeholder="Enter Name" required></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" placeholder="Enter Email" required></td>
				</tr>
				<tr>
					<td>Age:</td>
					<td><input type="text" name="age" placeholder="Enter age" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" placeholder="Enter Password" required></td>
				</tr>
				<tr>
					<td> </td>
					<td>
						<input type="reset" name="reset" value="Reset Form Fields">
						<input type="submit" name="submitbtn" value="Save Student" style="margin-top: 20px;">
					</td>
				</tr>
			</table>
		</form>
	</div>
		<br>
		<a href="list.php">Got to student list</a>
	</body>
</html>