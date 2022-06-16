<?php
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

$sql = "SELECT * FROM data";
$result = mysqli_query($conn, $sql);
?>

<div class="container">
        <center><h1 style="color: white;">Login</h1></center>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

			Username:<input type="text" name="username" id="username" placeholder="username" required><br><br>
            Email:<input type="email" name="email" id="email" placeholder="Email" required><br><br>
            <?php if (isset($email_error)) echo $email_error; ?>
			Password:<input type="password" name="password" id="password" placeholder="Password" required><br>
            <?php if (isset($password_error)) echo $password_error; ?>
			<br><br>
            <input type="submit" name="login" id="login" value="Login">
            <p>Don't have a account? <a href="add.php">Sign up</a></p>
        </form>
    </div>
<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>

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