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

<!DOCTYPE html>
<html>
    <head><title>Welcome in Sing In page</title></head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
        <label>Enter Username: </label><input type="text" name="user_name" placeholder="Enter your Username" requred=""><br>

        <label>Enter password: </label><input type="password" name="password" placeholder="Enter your password" requred=""><br>

        <input type="submit" name="loginbtn">


        </form>
    </body>
</html>