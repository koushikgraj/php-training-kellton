<?php
if(isset($_POST['submitbtn'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kellton_test1";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
   
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

	$sql = "INSERT INTO mydata
				( username, password, email,dob,gender)
				VALUES  '$username','$password', '$email','$date','$gender');";
	$qry = mysqli_query($conn, $sql);
	echo "<script>location.replace('list.php?action=add&status=success');</script>";
}
?>
<html>
	<head>
        
		<title>register</title>
	</head>
	<body>
        <center>
            <h3>registration form</h3>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table>
				<tr>
					<td>
						username:
					</td>
					<td>
						<input type="text" name="username" required>
					</td>
				</tr>
                <tr>
					<td>
						password:
					</td>
					<td>
						<input type="password" name="password"  required>
					</td>
				</tr>
                <tr>
					<td>
						email:
					</td>
					<td>
						<input type="email" name="email" required>
					</td>
				</tr>
                
            
				<tr>
					<td>
						dob:
					</td>
					<td>
						<input type="date" name="date" placeholder="Enter dob" required>
					</td>
				</tr>
                <tr>
					<td>
						gender:
					</td>
					<td><input type="radio" name="gender" value="male" required>MALE<br>
                    <input type="radio" name="gender" value="female" required>FEMALE<br>
					</td>
				</tr>
				<tr>
                    <td> 
				
						<input type="submit" name="submitbtn" value="signin">
					</td>
				</tr>
			</table>
		</form>
		<br>
		<a href=""register.php></a>
</center>
	</body>
</html> 