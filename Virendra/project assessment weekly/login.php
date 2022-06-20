<?php
if(isset($_POST['btnsubmit'])){
$sn="localhost";
$un="root";
$ps="";
$dn="kellton";

$conn=mysqli_connect($sn,$un,$ps,$dn);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }else{
    echo "Database connection is Success:<br>";
  }

  $user_name=$_POST['user_name'];
  $password=$_POST['password'];


//   $query= "SELECT * FROM `db`.`userinfo`";


  $sql = "SELECT * FROM `userinfo` WHERE user_name = '$user_name' AND password = '$password' ";
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
<form action="login.php" method="post" style="padding_top: 60px;">

<table>
    <tr><td>Enter Username</td><td><input type="user_name" name="txtu"  name="user_name" placeholder="Enter your Username" requred=""/></td></tr>
   <tr> <td>Enter password</td><td><input type="password" name="txtp" placeholder="Enter your password" requred=""/></td></tr>
   <tr><td colspan="4" align ="center" ><input type="submit" name="btnsubmit" value="Login"></td></tr>
</table>
</body>
</html>

