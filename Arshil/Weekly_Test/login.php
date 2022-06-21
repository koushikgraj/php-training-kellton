<!-- Weekly Test
Create a login & registration screen with the following  fields
1. Username
2. Password
3. Email
4. Date of birth
5. Gender

Step 1: Create database table to store above fields data
Step 2: Create signup page & store the data in database
Step 3: Create login page & allow only signed up user to login
Step 4: Verify & compare username & password from the database table -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	
</head>
<body>
	
        <center><h1 style="color: white;">Login</h1>
        <form method="post" action="">

            Email:<input type="email" name="email" id="email" placeholder="Email" required><br><br>
            Password:<input type="password" name="password" id="password" placeholder="Password" required><br>
            <br><br>
            <input type="submit" name="login" id="login" value="Login">
            <p>Don't have a account? <a href="registration.php">Sign Up</a></p>
        </form>
        </center>

</body>
</html>