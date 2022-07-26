<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-up</title>
</head>
<body>
    <form action="/web/register" method="POST">
        @csrf
        <label >Name:</label>
        <input type="text" name="name" placeholder="Your Name"><br><br>
        <span style="color: red">@error('name'){{$message}}@enderror</span><br>
        <label>Password:</label>
        <input type="password" name="password" id="" placeholder="password"><br><br>
        <span style="color: red">@error('password'){{$message}}@enderror</span><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html> 