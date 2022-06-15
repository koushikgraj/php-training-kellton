<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

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
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$country = mysqli_real_escape_string($conn, $_POST['country']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$id = mysqli_real_escape_string($conn, $_POST['id']);

	$sql = "UPDATE Student 
				SET 
					name = '$name',
					email = '$email',
					age = '$age',
					gender = '$gender',
					country = '$country',
					date = '$date'
				WHERE id = '$id'"; 

	$qry = mysqli_query($conn, $sql);
	echo "<script>location.replace('list.php?action=update&status=success');</script>";
}


//read the data from database to populate text box records
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql_select = "SELECT * FROM Student WHERE id = '$id'";
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
					<td> </td>
					<tr>
					<td>
						Age:
					</td>
					<td>
						<input type="text" name="age" value="<?php echo $row['age'];?>" placeholder="Enter Age" required>
					</td>
				</tr>





				<tr>
					<td>
						Gender:
					</td>
					<td>
					<input class="gender" type="radio" name="gender" value="male">
           <label >Male</label>
           <input type="radio" name="gender" value="female">
           <label >Female</label>
					</td>
				</tr>




				<tr>
					<td>
						Country:
					</td>
					<td>
					<select class="select" name="country" id ="car">
          <option value="NO-country">Select Your Country</option>
          <option value="INDIA">INDIA</option>
          <option value="NEPAL">NEPAL</option>
          <option value="JAPAN">JAPAN</option>
          <option value="US">US</option>
          <option value="UK">UK</option>
          </select>
					</td>
				</tr>






				<tr>
					<td>
						DOB:
					</td>
					<td>
					<input type="date" name="date">
					</td>
				</tr>





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