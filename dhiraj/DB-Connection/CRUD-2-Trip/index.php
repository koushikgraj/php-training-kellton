<?php
if(isset($_POST['submit'])){
$sn="localhost";
$un="root";
$ps="";
// $dn="db";

$conn=mysqli_connect($sn,$un,$ps);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }else{
    echo "Database connection is Success:<br>";
  }
  
//connecting to database

$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];



/*in this sql query i have done a mistake before that is the
single corts which is the difference for both and i got sql query errors 
the first one is correct and the second on is wrong way to declear the query
(`trip`) and('trip')*/

//this is wrong
// $sql="INSERT INTO 'trip' ('name', 'gender', 'age') VALUES ('$name', '$gender', '$age');";

//this is correct one
// $sql="INSERT INTO `trip` (`name`, `gender`, `age`) VALUES ('$name', '$gender', '$age');";

//this is also correct way
$sql="INSERT INTO `db`.`trip` (`name`,`gender`,`age`) VALUES ('$name','$gender','$age');";
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





//first this form will be executed and when submit is done then the post 
//method come in action and chenk where to send the data in which form 
//so in same form post has to send the is made by the form action 
//and starts executiong the database connection code
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

    <form method="post" action="index.php">
        <br>
        <br>
       Name: <input type="text" name="name" placeholder="Enter Name">
       <br>
       <br>
       Gender:<input type="radio" name="gender" value="Male">
        <label>Male</label>
        <input type="radio" name="gender" value="Female">
        <label>Female</label>
        <br>
        <br>
        Age:<input type="text" name="age" placeholder="Enter Age">
        <br>
        <br>
        <input type="submit" name="submit" value="send">


    </form>
</body>
</html>