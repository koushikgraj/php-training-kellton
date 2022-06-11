<?php
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

if(isset($_POST['submitbtn'])){
	$name = mysqli_real_escape_string($conn, $_POST['Name']);
	$email = mysqli_real_escape_string($conn, $_POST['Email']);
	$id = mysqli_real_escape_string($conn, $_POST['ID']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$country = mysqli_real_escape_string($conn, $_POST['country']);

	$sql = "UPDATE students 
				SET 
					Name = '$name',
					Email = '$email'
					Age = '$age'
					dob='$date'
				WHERE ID = '$id'"; 
				
	$qry = mysqli_query($conn, $sql);
	echo "<script>location.replace('list.php?action=update&status=success');</script>";
}


//read the data from database to populate text box records
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql_select = "SELECT * FROM students WHERE ID = '$id'";
$qry_select = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_assoc($qry_select);
?>
<html>
	<head>
		<title>Edit <?php echo $row['Name'];?></title>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table>
				<tr>
					<td>
						Name:
					</td>
					<td>
						<input type="text" name="Name" value="<?php echo $row['Name'];?>" placeholder="Enter Name" required>
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="Email" name="Email" value="<?php echo $row['Email'];?>" placeholder="Enter Email" required>
					</td>
				</tr>
				<tr>
					<td>
						Age:
					</td>
					<td>
						<input type="text" name="age" value="<?php echo $row['Age'];?>" placeholder="Enter Age" required>
					</td>
				</tr>
				<tr>
					<td>
						dob:
					</td>
					<td>
						<input type="date" name="date" value="<?php echo $row['date'];?>" >
					</td>
				</tr>
				<tr>
					<td>
						Country:
					</td>
					<td>
						<input type="text" name="country" value="<?php echo $row['Country'];?>">
					</td>
				</tr>
				<tr>
					<td>
						Gender:
					</td>
					<td>
						<input type="radio" name="gender" value="<?php echo $row['Male'];?>">Male<br>
						<input type="radio" name="gender" value="<?php echo $row['Female'];?>">Female
					</td>
				</tr>
				<tr>
					<td> </td>
					<td>
						<input type="hidden" name="ID" value="<?php echo $row['ID'];?>">
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