<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registration form</title>
	<style>
			.loginbox{
				    width: 320px;
    				height: 420px;
    				background: darkseagreen;
    				color: black;
    				margin-top: 100px;
    				margin-left: 500px;
    				position: absolute;
   				    box-sizing: border-box;
   				    padding-right: 20px;
			}
		</style>
</head>
<body>


	<div class="loginbox">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<center><h1 style="color: white;">LoginBox</h1></center>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="Username" placeholder="Enter Name" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="Password" name="Password" placeholder="Enter Password" required></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="Email" placeholder="Enter email" required></td>
				</tr>
				<tr>
					<td>DOB:</td>
					<td><input type="date" name="DOB" placeholder="Enter DOB" required></td>
				</tr>
				<tr>
				<td><p>Gender:</p></td>
				</tr>
				<tr>
				<td>Male:</td>
  				<td><input type="radio" name="Male">
  				</tr>
  								<tr>
				<td>feMale:</td>
  				<td><input type="radio" name="female">
  				</tr>
  				<tr>
				<td>others:</td>
  				<td><input type="radio" name="others" value="30">
  				</tr>
				<tr>
					<td> </td>
					<td>
						<input type="submit" name="submitbtn" value="Submit" style="margin-top: 20px;">
					</td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>