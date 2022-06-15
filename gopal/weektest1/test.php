<!DOCTYPE html>
<html>
<body>
<title> signup page </title>
<center>
<form action="insert.php" method="post">
    username:<input type="text"name="username"placeholder="enter user name"required><br><br>
    password:<input type="text"name="password"placeholder="enter password"required><br><br>
    email:<input type="e-mail"name="email"placeholder="enter email"required><br><br>
    dob:<input type="date"name="dob"required><br>
    gender:<br><input type="radio"name="gender"value="m"required>male<br>
    <input type="radio"name="gender"value="f"required>female<br>
    <input type="submit" name="submit">
</center>
</form>
</body>
</html>