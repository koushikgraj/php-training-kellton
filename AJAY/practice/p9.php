<?php
  include 'connect.php';
  if(isset($_POST['submit']))
  {
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

  $sql= "insert into" "crud" (name,email,mobile,password)
  values('$name','$email','$mobile','$password');
  $reult=mysqli_query($con,$sql);
  if($result)
  {
    echo 'Data inserted successfull';
  }
  else
  {
    die(mysqli_error($con));
  }
}

?>
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>crud operations</title>
  </head>
  <body>
    <h1>crud operations</h1>
    <form method='post'>
      <div class='container'</div>
  <div class='form-group'>
    <label>Name</label>
    <input type='Name' class='form-control' placeholder='enter your name' name='name'>
    </div> 
     <div class='form-group'>
    <label>email</label>
    <input type='email' class='form-control' placeholder='enter your email' name='email'>
    </div> 
     <div class='form-group'>
    <label>mobile</label>
    <input type='mobile' class='form-control' placeholder='enter your mobile' name='mobile'>
    </div> <div class='form-group'>
    <label>password</label>
    <input type='password' class='form-control' placeholder='enter your password' name='password'>
    </div> 
  <button type='submit' class='btn btn-primary'name='submit'>Submit</button>
</form>
  </body>
</html>



