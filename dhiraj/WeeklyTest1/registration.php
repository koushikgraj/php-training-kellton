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
  
//connecting to database

$name=$_POST['name'];
$password=$_POST['pass'];
$email=$_POST['email'];
$date=$_POST['date'];
$gender=$_POST['gender'];




$sql="INSERT INTO `db`.`register` (`name`,`password`,`email`,`date`,`gender`)
 VALUES ('$name','$password','$email','$date','$gender');";
echo $sql;
echo "<br><br>";
?>

<?php
//this four line of code help to insert the $sql query in the database
$result = $conn->query($sql);


if($result == true){
    echo "Successfully Inserted<br>";
}else{
    echo "ERROR: $sql <br> $conn->error";
}

$conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Details</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    
    <div class="container">
  <h1><u>REGISTRATION FORM :</u></h1>
    <form method="post" action="registration.php">
      Enter UserName: <input type="text" name="name" placeholder="Enter UserName"><br>
   
    Enter Password:<input type="password" name="pass" placeholder="Enter Your Password"><br>

 E-mail: <input type="text" name="email" placeholder="Enter Your Email"><br>
     
 Gender:<input class="gen" type="radio" name="gender">
           <label >Male</label>
           <input type="radio" name="gender">
           <label >Female</label><br>

    
   Enter Date of Birth: <input type="date" name="date"><br>

   <input type="submit" name="submit" value="send">
  
</form>  
</div>
</body>
</html>