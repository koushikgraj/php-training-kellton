<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signin</title>
</head>
<body style="background-color: greenyellow;"> >
	<center>
	<form action="signregister.php" method="post" style="padding-top: 100px;">
		<textarea></textarea>NAME:<input type="text" name="name" required>
			<textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
		 <br><br>
		<textarea> firstname: <input type="text" firstname="firstname" required></textarea>
		<textarea> surname: <input type="text" surname="surname" required></textarea>
		 <br><br>
		password: <input type="password" name="pass" required>
		<br><br>
		<textarea>address: <input type="text" address="address" required></textarea>
		<br><br>
		<textarea>permantaddress: <input type="text" permantaddress="permantaddress" required></textarea>
		<br><br>
		<textarea>presentaddress: <input type="text" presentaddress="presentaddress" required></textarea>
		<br><br>
		email:<input type="email">
		<br><br>
		mobile: <input type="text" mobile="mobile" required>
		<br><br>
		Gender: <input type="radio" name="gender" value="male">Male
		<br><br>
				<input type="radio" name="gender" value="female">Female
				<br><br>
				<input type="radio" name="gender" value="other">Other
				<br><br>
				<select id="country" name="country">Country
					<br><br>
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