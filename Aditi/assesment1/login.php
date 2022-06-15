<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<style>
		.container{
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
	 <div class="container">
        <center><h1 style="color: white;">Login</h1></center>
        <form method="post" action="">

            Email:<input type="email" name="email" id="email" placeholder="Email" required><br><br>
            Password:<input type="password" name="password" id="password" placeholder="Password" required><br>
            <br><br>
            <input type="submit" name="login" id="login" value="Login">
            <p>Don't have a account? <a href="registration.php">Sign Up</a></p>
        </form>
    </div>

</body>
</html>