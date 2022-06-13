<?php
if(isset($_POST['submitbtn'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "studentsdata";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$country = mysqli_real_escape_string($conn, $_POST['country']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	
	$sql = "INSERT INTO students 
				(ID, Name, Email,Age,dob,Country,Gender)
				VALUES (NULL, '$name', '$email','$age','$date','$country','$gender');";
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
					<td>
						Age:
					</td>
					<td>
						<input type="age" name="age" placeholder="Enter age" required>
					</td>
				</tr>
				<tr>
					<td>
						Dateofbirth:
					</td>
					<td>
						<input type="date" name="date" placeholder="dd-mm-yyyy" required>
					</td>
				</tr>
				<tr>
					<td>
						Country:
					</td>
					<td>
						<input type="text" name="country" placeholder="Enter country" required>
					</td>
				</tr>
				<tr>
					<td>
						Gender:
					</td>
					<td>
						<input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female">Female
						
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