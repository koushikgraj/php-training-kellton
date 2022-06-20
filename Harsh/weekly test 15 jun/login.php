
<html>
	<head>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
			USERNAME: <input type="text"name="username"value="username">
			PASSWORD: <input type="password"name="password"value="password">
			<input type="submit"name="submit"value="submit">
		</form>
	</head>
</html><?php
   if (isset($_POST['submit'])) {
       $username = $_POST['username'];
       $password  = $_POST['password'];

       if ($username == 'username'  && $password == 'password'){
        session_start();
           $_SESSION['submit'] = true;
		   echo "succesfully login";
	   }
           
        //    header('Location: ../admin/dashboard.php');       }
       else{
           echo 'Invalid Credential';
       }
   }