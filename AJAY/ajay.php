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

	<br><br>
			<textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
		 <br><br>
	     firstname: <input type="text" firstname="firstname" required></textarea>
		 surname: <input type="text" surname="surname" required></textarea>
		 <br><br>
		password: <input type="password" name="pass" required>
		<br><br>
		address:
		<br><br>
		permantaddress: <input type="text" permantaddress="permantaddress" required></textarea>
		<br><br>
		presentaddress: <input type="text" presentaddress="presentaddress" required></textarea>
		<br><br>
	     mobile: <input type="text" mobile="mobile" required>
		<br><br>
			email:<input type="email">
		<br><br>
		
		Gender: <input type="radio" name="gender" value="male">Male
		<br><br>
				<input type="radio" name="gender" value="female">Female
				<br><br>
				<input type="radio" name="gender" value="other">Other
				<br><br>
				country:
				<select id="country" name="country">Country
  					<option value="india">India</option>
  					<option value="us">US</option>
  					<option value="uk">UK</option>
				</select><br><br>
				<textarea id="w3review" boking infomation="w3review" rows="4" cols="50"></textarea>
				boking information: 
				<br><br>
				check in date: <input type="date" id="check in date" name="check in date">
				check out date:<input type="date" id="check out date" name="check out date">
				<br><br>
				gust in room:<input type="gust in room">
				<br><br>
				room type:
				<select id="room type" name="room type">room type
					<br><br>
  					<option value="single">single</option>
  					<option value="double">double</option>
  					<option value="triple">triple</option>
				</select><br><br>
				somking room:
				<select id="somking room" name="somking room">somking room
  					<option value="yes">yes</option>
  					<option value="no">no</option>
				</select><br><br>
				wifi:
				<input type="radio" name="wifi" value="yes">yes
				<input type="radio" name="wifi" value="no">no
			<br><br>
				free service:
				<input type="radio" name="service" value="yes">yes
				<input type="radio" name="service" value="no">no
				<br><br>
				total cost: <input type="total cost" name="cost" required>
				<br><br>






		<input type="submit" style="color: lightblue;" >
		<input type="submit" name="cancel" value="cancel">
	</form>
	</center>
</body>
</html>