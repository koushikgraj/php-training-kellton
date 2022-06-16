<?php
if(isset($_POST['submitbtn'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "form";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$name_error = "Name must contain only alphabets and space";
		}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$email_error = "Please Enter Valid Email ID";
		}
	if(strlen($password) < 6) {
		$password_error = "Password must be minimum of 6 characters";
		}  	
		
	$sql = "INSERT INTO data 
				( username,email,password,dob)
				VALUES ( '$username', '$email', '$password', '$dob');";
	$qry = mysqli_query($conn, $sql);
	echo "<script>location.replace('login.php?action=add&status=success');</script>";
}
?>
<html>
	<head>
		<title>Add new student</title>
		<link rel="stylesheet" type="text/css" href="">
		<style>
			.loginbox{
				    width: 320px;
    				height: 420px;
    				background: darkseagreen;
    				color: black;
    				margin-top: 100px;
    				margin-left: 500px;
    				position: absolute;
   				    box-sizing: border-box;
			}
		</style>
	</head>
	<body>
			<div class="loginbox">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<center><h1 style="color: white;">LoginBox</h1></center>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" placeholder="Enter Name" required>
					<?php if (isset($name_error)) echo $name_error; ?>
					</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" placeholder="Enter Email" required>
					<?php if (isset($email_error)) echo $email_error; ?>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" placeholder="Enter Password" required>
					<?php if (isset($password_error)) echo $password_error; ?>
					</td>
				</tr>
				<tr>
					<td>DOB:</td>
					<td><input type="date" name="dob" placeholder="Enter DOB" required></td>
				</tr>

				<tr>
					<td> </td>
					<td>
						<input type="submit" name="submitbtn" value="Submit" style="margin-top: 20px;">
					</td>
				</tr>
			</table>
			<p> have an account? <a href="login.php">Sign up</a></p>
		</form>
	</div>
	</body>
</html>