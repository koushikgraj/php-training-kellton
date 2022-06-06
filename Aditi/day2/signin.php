<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signin</title>
</head>
<body>
	<center>
	<form action="signregister.php" method="post" style="padding-top: 100px;">
		username: <input type="text" name="name" required><br>
		password: <input type="password" name="pass" required><br>
		Gender: <input type="radio" name="gender" value="male">Male<br>
				<input type="radio" name="gender" value="female">Female<br>
				<input type="radio" name="gender" value="other">Other<br>
				<select id="country" name="country">Country
  					<option value="india">India</option>
  					<option value="us">US</option>
  					<option value="uk">UK</option>
				</select><br><br>
		<input type="submit" style="color: lightblue;" >
		<input type="submit" name="cancel" value="cancel">
	</form>
	</center>

</body>
</html>