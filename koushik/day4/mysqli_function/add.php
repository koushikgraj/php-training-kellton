<?php
if(isset($_POST['submitbtn'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	
	$sql = "INSERT INTO students 
				(id, name, email)
				VALUES (NULL, '$name', '$email');";
	$qry = mysqli_query($conn, $sql);
	echo "<script>location.replace('list.php?action=add&status=success');</script>";
}
?>
<html>
	<head>
		<title>Add new student</title>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table>
				<tr>
					<td>
						Name:
					</td>
					<td>
						<input type="text" name="name" placeholder="Enter Name" required>
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="email" name="email" placeholder="Enter Email" required>
					</td>
				</tr>
				<tr>
					<td> </td>
					<td>
						<input type="reset" name="reset" value="Reset Form Fields">
						<input type="submit" name="submitbtn" value="Save Student">
					</td>
				</tr>
			</table>
		</form>
		<br>
		<a href="list.php">Got to student list</a>
	</body>
</html>