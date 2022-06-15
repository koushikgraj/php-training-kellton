
<!DOCTYPE html>
<html>
<head>upload CSV file</head>
	<title></title>

<body>


 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?enctype="multipart/form-data">

	

	<input type="text" name="username" placeholder="Enter username" required />
	<br><br>
	<input type="file" name="image" size="1.5MB"; required />
	<br><br>
	<input type ="submit">

</form>

</body>


</html>