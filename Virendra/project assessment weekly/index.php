<?php
if(isset($_POST['btnsubmit'])){
   
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kellton";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
	
	echo $sql = "INSERT INTO userinfo
				( user_name, password, email,date,gender)
				VALUES ('$user_name','$password', '$email','$date','$gender');";
	$qry = mysqli_query($conn, $sql);
	  echo "<script>location.replace('list.php?action=add&status=success');</script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    
    </head>
<body>
    <div id="header">
    <a href="/">Home</a> ||
    
    </div>
<div id="middle">
    <div style="float:left;" >
        <h1>Welcome in Singup page</h1>
 
        <form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
      
    <table>

        <tr><td>Enter Username:</td><td><input type="text" name="user_name" placeholder="Enter Your Username" required=""/></td><br></tr>
        <tr><td>Enter Password:</td><td><input type="password" name="password" placeholder="Enter Your password" required=""/></td></tr>
         <tr><td>Enter Eamil id:</td><td><input type="text" name="email" placeholder="Enter Your Email"  required=""/></td></tr>
         <tr><td>Date of Birth:</td><td><input type="text" name="date" placeholder="Enter your date of Birth" required=""/></td></tr>
         <tr><td>Gender:</td<tr><td>
                        <input type= "radio" name="gender"  value='male' required>Male<br>
                        <input type="radio" name="gender"  value='female' required>Famale<br>
					
					</td>
				</tr>
         <tr><td colspan="4" align="center"><input type="submit" name="btnsubmit" value="Register"/></td></tr>
    </table>
    </form>

    </div>



<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "kellton";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM userinfo";
$result = mysqli_query($conn, $sql);
?>

<div style="float:right;">
    <h1>Welcome in Sing In page</h1>
    
 <form action="index.php" method="post" name='indexlogin'>
  
<table>
    <tr><td>Enter Username</td><td><input type="user_name" name="txtu"  name="user_name" placeholder="Enter your Username" requred=""/></td></tr>
   <tr> <td>Enter password</td><td><input type="password" name="txtp" placeholder="Enter your password" requred=""/></td></tr>
   <tr><td colspan="4" align ="center" ><input type="submit" name="btnsubmit" value="Login"></td></tr>
</table>
 </form>
</div>
</div>

<div id="footer" >

    
    <div style="float: right;" >
<ul><li><a href="https://www.kelltontech.com/"><img src="img/facebook.png" height="30" width="30"/></a></li>
<li><a href="https://www.kelltontech.com/"><img src="img/insta.png" height="30" width="30"/></a></li>
<li><a href="https://www.kelltontech.com/"><img src="img/twt.png" height="30" width="30"></a></li>
<li><a href="https://www.kelltontech.com/"><img src="img/youtube.png" height="30" width="30"/></a></li>
</ul>
    </div>


</div>
</body>
</html>