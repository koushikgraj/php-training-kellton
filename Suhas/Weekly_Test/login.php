<?php
if(isset($_POST['loginbtn'])) {
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
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM info where username='$username' AND password='$password'";
$qry = mysqli_query($conn, $sql);
$check = mysqli_fetch_array($qry);

if(isset($check))
 {
  echo "<br><h2>success</h2><br>";
  }
  else
  {
  echo "<br><h2>failure</h2><br>";
  }
  
 echo "<br><br>";
}
?>

<!DOCTYPE html>
<html>
    <head><title>Login Page</title></head>
    <body>
        <form action="login.php" method = "post">
        <label>Username : </label><input type="text" name="username"><br>

        <label>Password : </label><input type="password" name="password"><br>

        <input type="submit" name="loginbtn">


        </form>
    </body>
</html>