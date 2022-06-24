<h1>User Login</h1>

<form action="post" method="POST">
@csrf

    Name from Post :<input type="text" name="Name" placeholder="Enter ur name"></input><br><br>
    Password :<input type="password" name="password" placeholder="Enter ur Password"></input><br><br>

    <input type="submit" name="submitbtn"></input>


</form>