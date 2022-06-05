<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" conntent="width=device-width, initial-sacle=1">
    <title>form</title>
</head>
<body>
    <center>
    <form action="details.php" method="post">
            USERNAME: <input type="text" name="name" required><br>
            PASSWORD: <input type="password" name="pass" required><br>
            GENDER: <input type="radio" name="gender" value="male">MALE
                    <input type="radio" name="gender" value="female">FEMALE
                    <input type="radio" name="gender" value="other">OTHER<br><br>
            COUNTRY: <select id="country" name="country">Country
                        <option value="INDIA">INDIA</option>
                        <option value="UK">UK</option>
                    </select><br><br><br>
            <input type="submit" style="color": lightblue;">
            <input type="submit" name="Cancel" value="Cancel">

    </form>
    </center>
</body>
</html>