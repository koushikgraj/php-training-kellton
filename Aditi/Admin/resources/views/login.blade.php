<h1>Welcome to login page</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form action={{url('/login')}}
    method="POST">
        @csrf
     

        <label>Email:</label>
        <input type="text" name="name" id="" placeholder="Your name"><br><br>
        <span style="color: red">@error('name'){{$message}}@enderror</span><br>

        <label>Password:</label>
        <input type="password" name="password" id="" placeholder="password"><br><br>
        <span style="color: red">@error('password'){{$message}}@enderror</span><br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html> 