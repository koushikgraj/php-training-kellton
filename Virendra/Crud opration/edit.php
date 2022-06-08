<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submitbtn'])){
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$id = mysqli_real_escape_string($conn, $_POST['id']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $Date_of_birth = mysqli_real_escape_string($conn, $_POST['Date_of_birth']);
    $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
    $Country = mysqli_real_escape_string($conn, $_POST['Country']);

	
	$sql = "UPDATE students 
				SET 
					name = '$name',
					email = '$email'
                    age = '$age'
                    Date_of_birth='$date_of_birth'
                    Gender ='$Gender'
                    Country ='$Country'

				WHERE id = '$id'"; 
				
	$qry = mysqli_query($conn, $sql);
	echo "<script>location.replace('list.php?action=update&status=success');</script>";
}


//read the data from database to populate text box records
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql_select = "SELECT * FROM student_table WHERE id = '$id'";
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
						<input type="text" name="name" value="<?php echo $row['Name'];?>" placeholder="Enter Name" required>
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="email" name="email" value="<?php echo $row['Email'];?>" placeholder="Enter Email" required>
					</td>
				</tr>
                <tr>
					<td>
						Age:
					</td>
					<td>
						<input type="number" name="age" value="<?php echo $row['age'];?>" placeholder="Enter your age" required>
					</td>
				</tr>
                <tr>
					<td>
						Date of Birth:
					</td>
					<td>
						<input type="date" name="Date_of_birth" value="<?php echo $row['Date_of_birth'];?>" placeholder="Enter your date of birth" required>
					</td>
				</tr>
                <tr>
					<td>
						Gender:
					</td>
					<td>
                    <input type="radio" name="Gender" value="<?php echo $row['Male'];?>" required>MALE<br>
                    <input type="radio" name="Gender" value="<?php echo $row['Female'];?>" required>FEMALE<br>
					</td>
				</tr>
                <tr>
					<td>
						Country:
					</td>
					<td>
                    <select id="Country" name="Country">Country
                        <option value="INDIA">INDIA</option>
                        <option value="US">US</option>
                        <option value="UK">UK</option>
                    </select>
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