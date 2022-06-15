<?php
 if(isset($_POST['register']))
 {
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "weeklytest";

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
	
	$sql = "INSERT INTO info
				(id, username, password,email,date,gender)
				VALUES (NULL, '$username', '$password','$email','$date','$gender');";
	$qry = mysqli_query($conn, $sql);
	//echo $sql;
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
    </head>
    <body bgcolor="pink">
        
       <form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
       <center>    
       <fieldset width = "200px" >
       <legend align="center"><h2>Registration</h2></legend>
       <label>Username : </label><input type = "text" name = "username" required placeholder="enter username"><br><br>

       <label>Password : </label><input type = "password" name = "password" required placeholder="enter valid password"><br><br>

       <label>E-mail : </label><input type = "email" name = "email" required><br><br>

       <label>Date of Birth : </label><input type = "date" name = "date"><br><br>

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
				</tr><br><br>

       <input type = "submit" name = "register"><input type = "reset" name = "cancel"><br><br>
<br><br>

</fieldset>
</center>
       </form>
    </body>
</html>