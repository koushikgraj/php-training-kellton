<?php
if(isset($_POST['submitbtn'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "php_training";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
//mysqli_real_escape_string function() is used to escape all special character for use in an sql query.It is used before inserting a string in a database,as it removes any special character that may interface with the query operation.
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$country = mysqli_real_escape_string($conn, $_POST['country']);

	$sql = "INSERT INTO student
				(id, name, email, age, dob, gender, country)
				VALUES (NULL, '$name', '$email','$age','$date','$gender','$country');";
	$qry = mysqli_query($conn, $sql);
	echo "<script>
    location.replace('list.php?action=add&status=success');
    </script>";
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
						<input type="text" name="age" placeholder="Enter AGE" required>
					</td>
				</tr>
				<tr>
					<td>
						DOB:
					</td>
					<td>
						<input type="date" name="date" placeholder="Enter DOB" required>
					</td>
				</tr>
				<tr>
					<td>
						Gender:
					</td>
					<td>
					<input type="radio" name="gender" value="male" required>MALE<br>
                    <input type="radio" name="gender" value="female" required>FEMALE<br>
					</td>
				</tr>
				<tr>
					<td>
						Country:
					</td>
					<td>
					<select id="country" name="country">Country
                        <option value="INDIA">INDIA</option>
                        <option value="US">US</option>
                        <option value="UK">UK</option>
                    </select>
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
</html