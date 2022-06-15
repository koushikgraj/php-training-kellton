<?php
if(isset($_POST['submit'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "firstdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
//mysqli_real_escape_string function() is used to escape all special character for use in an sql query.It is used before inserting a string in a database,as it removes any special character that may interface with the query operation.
	$name = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
	$email = mysqli_real_escape_string($conn, $_POST['Email']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$gender = mysqli_real_escape_string($conn, $_POST['Gender']);


	$sql = "INSERT INTO showtable
				( username, password,email,  dob, Gender)
				VALUES ($name, '$password', '$email','$date','$gender');";
	$qry = mysqli_query($conn, $sql);

}
?>
<html>
	<head>
		<title>Add user </title>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table>
				<tr>
					<td>
						Username:
					</td>
					<td>
						<input type="text" name="username" placeholder="Enter Name" required>
					</td>
				</tr>
                <tr>
					<td>
						password:
					</td>
					<td>
						<input type="password" name="password" >
					</td>
				</tr>
				
				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="Email" name="Email" placeholder="Enter Email" required>
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
					<input type="radio" name="Gender" value="Male" required>MALE<br>
                    <input type="radio" name="Gender" value="Female" required>FEMALE<br>
					</td>
				</tr>
				
				<tr>
					<td> </td>
					<td>
						
						<input type="submit" name="submit" value="submit ">
					</td>
				</tr>
			</table>
		</form>
		<br>
		<a href="registration.php">Got to registration</a>
	</body>
</html