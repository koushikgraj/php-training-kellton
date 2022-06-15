<?php
  $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "php_training";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}  
    ?>
    <html>
    <head></head>
    <body>
        <center>
        <h1>Registration form</h1>
        <form action="signup.php"method="post">
USERNAME:<input type="text"name="username"><br><br>
    PASSWORD:<input type="password"name="password"><br><br>
    EMAIL:<input type="email"name="email"><br><br>
    DATE OF BIRTH:<input type="date"name="date"><br><br>
    
    GENDER:<br><input type="radio"name="gender"value="male">MALE<br>
    <input type="radio"name="gender"value="female">FEMALE<br>
    <input type="radio"name="gender"value="other">OTHER<br>
    <input type="submit"name="submit" value="Save Student">>

</form>
</center>
    </body>
</html>