<?php
if(isset($_POST['submitbtn']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdatabase";

$conn = mqsqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die ("connection failed :" .mysqli_connect_error());
}

$name = mysqli_real_escape_string($conn , $_POST['name']);
$email = mysqli_real_escape_string($cponn, $_POST['email']);
$mob = mysqli_real_escape_string($conn , $_POST['mob']);
$gender = mysqli_real_escape_string($cponn, $_POST['gender']);

$sql = "INSERT INTO student
         (id,name,email,mob,gender) VALUES (NUll, $name,$email,$mob,$gender);";

 $qry = mysqli_query($conn , $sql);

 echo $sql;
}
?>

<html>
    <head>
        <title>Student entry</title>
    </head>
    <body>
        <form method ="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <tr>
            <td>Name :</td>
            <td><input type ="text" name="name" placeholder="enter name"></td>
        </tr>
        <br><br>
        <tr>
            <td>E-mail :</td>
            <td><input type ="mail" name="email" placeholder="enter email" required></td>
        </tr>
        <br><br>
        <tr>
            <td>Mob NUmber :</td>
            <td><input type ="tel" name="mob"></td>
        </tr>
        <br><br>
        <tr>
            <td>Gender :</td>
            <input type ="radio" name="gender" id="male"><label for ="male">male</label>
            <input type ="radio" name="gender" id="female"><label for ="female">female</label>
            
        </tr>
        <br><br>
        <tr>
            <input type = "submit" name="submitbn">
        </tr>

        </form>
        <br>
        <a href="practice_list.php">Goto list page</a>
    </body>

</html>