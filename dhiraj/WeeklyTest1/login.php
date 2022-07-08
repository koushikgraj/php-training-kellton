<?php
if(isset($_POST['submit'])){
$sn="localhost";
$un="root";
$ps="";
$dn="kellton_test1";

$conn=mysqli_connect($sn,$un,$ps,$dn);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }else{
    echo "Database connection is Success:<br>";
  }

  $name=$_POST['name'];
  $password=$_POST['pass'];


//   $query= "SELECT * FROM `db`.`register`";


  $sql = "SELECT * FROM `register` WHERE name = '$name' AND password = '$password' ";
$result = mysqli_query($conn,$sql); 
$check = mysqli_fetch_array($result);

//checking the user
if(isset($check)){
    echo '"<br><h2>success</h2><br>';
    }else{
    echo '"<br><h2>failure</h2><br>"';
    }
    echo "<br>";
echo  $sql;
echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form action="login.php" method="post" style="padding_top: 60px;">
UserName: <input type="text" name="name"><br>
Password: <input type="password" name="pass"><br>
<input type="submit" name="submit" style="color: blue;">
</form>
</center>



</body>
</html>