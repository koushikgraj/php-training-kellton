<?php
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

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head><title>Login Page</title></head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
        <label>Username : </label><input type="text" name="username"><br>

        <label>Password : </label><input type="password" name="password"><br>

        <input type="submit" name="loginbtn">


        </form>
    </body>
</html>