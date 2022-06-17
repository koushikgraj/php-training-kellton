<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <center>
        <form action="signin.php" method ="post">
            USERNAME: <input type="text" name="uname" /><br><br>
            PASSWORD: <input type="password" name="pass" /><br><br>
            EMAIL: <input type ="email" name ="email" /><br><br>
            DATE OF BIRTH: <input type ="date" name="date" /><br><br>
            GENDER:<br> <input type ="radio" name="gender" vale="male">Male<br>
            <input type ="radio" name="gender" vale="female">Female<br>
            <input type ="radio" name="gender" vale="others">Others<br><br>
            <input type ="submit"><br><br>
        </form>
    </center>
    
</body>
</html>