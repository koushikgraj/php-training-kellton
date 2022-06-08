<?php
if(isset($_POST['submitbtn'])){
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
	
	$name = mysqli_real_escape_string($conn, $_POST['Name']);
	$email = mysqli_real_escape_string($conn, $_POST['Email']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $Date_of_birth = mysqli_real_escape_string($conn, $_POST['Date_of_birth']);
    $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
    $Country= mysqli_real_escape_string($conn, $_POST['Country']);
	
	echo $sql = "INSERT INTO student_table
				(id, Name, Email,age,Date_of_birth,Gender,Country)
				VALUES (NULL, '$name', '$email','$age','$Date_of_birth','$Gender','$Country');";
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
						<input type="text" name="Name" placeholder="Enter Name" required>
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="email" name="Email" placeholder="Enter Email" required>
					</td>
				</tr>
                <tr>
					<td>
						Age:
					</td>
					<td>
						<input type="Number" name="age" placeholder="Enter your age" value ='age' required>
					</td>
				</tr>
                <tr>
					<td>
						Date Of Birth:
					</td>
					<td>
                    <input type="date" name="date"  placeholder="Enter date of birth" required>
					</td>
				</tr>
                <tr>
					<td>
						Gender:
					</td>
                    <tr>
					<td>
                        <input type= "radio" name="Gender"  value='male' required>Male<br>
                        <input type="radio" name="Gender"  value='female' required>Famale<br>
					
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