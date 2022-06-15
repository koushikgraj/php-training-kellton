
<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "php_training";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (isset($_POST['submit'])){
        if(!empty($_POST['username']) &&!empty($_POST['password'])&&!empty($_POST['email'])&&!empty($_POST['date'])!empty($_POST['gender'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $date=$_POST['date'];
            $gender=$_POST['gender'];
            $query = "insert into studentdata(username,password,email,dob,gender)
            value('$username','$password','email','date','gender')";
            $run = mysqli_query($conn,$query) or die(mysqli_error());
            if($run){
                echo "form submitted successfully";
            }
            else{
                echo "form not submitted";
            }
        }
    }
	  
    
    ?>
    <html>
    <body>
        
