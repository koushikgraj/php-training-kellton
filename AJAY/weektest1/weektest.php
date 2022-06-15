<?php

 $db = mysqli_connect("localhost","root","","weektest");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP TEST</title>
</head>
<body>
     <form  action="connect.php" method="POST">
     	<label>Username:</label>
     	<input type="text" name="name" placeholder="Enter Name">
     	<br><br>
     	<label>Password:</label>
     	<input type="text" name="passsword" placeholder="Enter Password">
     	<br><br>
     	<label>Email:</label>
     	<input type="email" name="email" placeholder="Enter Email">
     	<br><br>
     	<label>Date of birth:</label>
     	<input type = "date"  placeholder="Enter date of birth">
     	<br><br>
     	<label>Gender:</label>
     	<input class="gender" type="radio" name="gender" value="male">
           <label >Male</label>
           <input type="radio" name="gender" value="Female">
           <label >Female</label>
           <br><br>
     	
     	<input type="submit" name="submit" value="submit">
     	<br><br>
     </form>
    

</body>
</html>

