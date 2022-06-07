<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submitbtn'])){
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $dob = mysqli_real_escape_string($conn, $_POST['date']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);

	$sql = "UPDATE students 
				SET 
					name = '$name',
					email = '$email'
                    age='$age';
                    country='$country';
                    dob='$date';
                    gender='$gender';
				WHERE id = '$id'"; 

	$qry = mysqli_query($conn, $sql);
	echo "<script>location.replace('list.php?action=update&status=success');</script>";
}


//read the data from database to populate text box records
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql_select = "SELECT * FROM students WHERE id = '$id'";
$qry_select = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_assoc($qry_select);
?>
<html>
	<head>
		<title>Edit <?php echo $row['name'];?></title>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table>
				<tr>
					<td>
						Name:
					</td>
					<td>
						<input type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Enter Name" required>
					</td>
				</tr>
                <tr>
					<td>
						Email:
					</td>
					<td>
						<input type="email" name="email" value="<?php echo $row['email'];?>" placeholder="Enter Email" required>
					</td>
				</tr>
                <tr>
					<td>
						age:
					</td>
					<td>
						<input type="text" name="age" value="<?php echo $row['age'];?>" placeholder="Enter Name" required>
					</td>
				</tr>
                <tr>
					<td>
						country:
					</td>
					<td>
						<input type="text" name="country" value="<?php echo $row['country'];?>" placeholder="Enter Name" required>
					</td>
				</tr>
                <tr>
					<td>
						dob:
					</td>
					<td>
						<input type="date" name="dob" value="<?php echo $row['date'];?>" placeholder="Enter Name" required>
					</td>
				</tr>
                <tr>
					<td>
						gender:
					</td>
					<td>
						<input type="radio" name="gender" value="<?php echo $row['gender'];?>" placeholder="Enter Name" required>
					</td>
				</tr>
				<tr>
					<td> </td>
					<td>
						<input type="hidden" name="id" value="<?php echo $row['id'];?>">
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
 