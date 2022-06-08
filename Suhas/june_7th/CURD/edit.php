<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdatabase";

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
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$country = mysqli_real_escape_string($conn, $_POST['country']);
	
	$sql = "UPDATE student 
				SET 
					name = '$name',
					email = '$email',
					date = '$date',
					age = '$age',
					gender = '$gender',
					country = '$country'
				WHERE id = '$id'"; 
				
	$qry = mysqli_query($conn, $sql);
	echo "<script>location.replace('list.php?action=update&status=success');</script>";
}


//read the data from database to populate text box records
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql_select = "SELECT * FROM student WHERE id = '$id'";
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
						date_of_birth:
					</td>
					<td>
						<input type="date" name="date" placeholder="Enter date" required>
					</td>
				</tr>
				<tr>
					<td>
						age:
					</td>
					<td>
						<input type="text" name="age" placeholder="Enter age">
					</td>
				</tr>
				<tr>
					<td>
						Gender:
					</td>
					<td>
					<input class="gender" type="radio" name="gender" value="male">
           <label >Male</label>
           <input type="radio" name="gender" value="Female">
           <label >Female</label>
					</td>
				</tr>

				<tr>
					<td>
						Country:
					</td>
					<td>
					<select class="select" name="country" id ="car">
			        <option>Select Your Country</option>
			        <option>India</option>
		        	<option>Nepal</option>
		        	<option>Japan</option>
		        	<option>Rusia</option>
		        	<option>America</option>
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