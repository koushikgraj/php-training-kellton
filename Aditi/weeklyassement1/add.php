<?php
if(isset($_POST['submitbtn'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "assesment";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$name = mysqli_real_escape_string($conn, $_POST['Username']);
	$email = mysqli_real_escape_string($conn, $_POST['Email']);
	$age = mysqli_real_escape_string($conn, $_POST['Password']);
	$password = mysqli_real_escape_string($conn, $_POST['DOB']);
	
	$sql = "INSERT INTO registration 
				( Username,Email, Password, DOB)
				VALUES ( '$Username', '$Email', '$Password', '$DOB');";
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
					<td><input type="text" name="Username" placeholder="Enter Name" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="Password" name="Password" placeholder="Enter Password" required></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="Email" placeholder="Enter email" required></td>
				</tr>
				<tr>
					<td>DOB:</td>
					<td><input type="date" name="DOB" placeholder="Enter DOB" required></td>
				</tr>
				<tr>
				<td><p>Gender:</p></td>
				</tr>
				<tr>
				<td>Male:</td>
  				<td><input type="radio" name="Male">
  				</tr>
  								<tr>
				<td>feMale:</td>
  				<td><input type="radio" name="female">
  				</tr>
  				<tr>
				<td>others:</td>
  				<td><input type="radio" name="others" value="30">
  				</tr>
				<tr>
					<td> </td>
					<td>
						<input type="submit" name="submitbtn" value="Submit" style="margin-top: 20px;">
					</td>
				</tr>
			</table>
		</form>
	</div>

		<br>
		<a href="list.php">Got to student list</a>
	</body>
</html>