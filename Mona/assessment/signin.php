<?php
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

$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);
?>
<a href="assessment.php">Add New Student</a>
<br><br>
<?php
if(
	isset($_GET['action']) && 
	$_GET['action'] == 'add' && 
	$_GET['status'] == 'success'
	){
?>
<div>Student login succesfully</div>
<?php } ?>



<div class="container">
        <center><h1 style="color: white;">Login</h1></center>
        <form method="post" action="">

            Email:<input type="email" name="Email" id="email" placeholder="Email" required><br><br>
            Password:<input type="password" name="Password" id="password" placeholder="Password" required><br>
            <br><br>
            <input type="submit" name="login" id="login" value="Login">
            <p>Don't have a account? <a href="regisform.php">Sign up</a></p>
        </form>
    </div>
<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>
	<tr>
		<td><?php echo $row['Username'];?></td>
		<td><?php echo $row['Email'];?></td>
		<td><?php echo $row['Password'];?></td>
		<td><?php echo $row['DOB'];?></td>
        <td><?php echo $row['Gender'];?></td>
	</tr> 
<?php
  }
} else {
  echo "0 results";
}
?>
</table>
<br>

<?php

mysqli_close($conn);

function pr($data)
{
	echo "<pre>";print_r($data);echo "</pre>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body><style type="text/css">
	.container{
		width: 320px;
    				height: 420px;
    				background: darkseagreen;
    				color: black;
    				margin-top: 100px;
    				margin-left: 500px;
    				position: absolute;
   				    box-sizing: border-box;
   				    padding-right: 20px;
	}
</style>

</body>
</html>
