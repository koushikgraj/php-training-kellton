
<html >
<head>
    <style>
        .container{
            border:10px solid #a99c9c;
            background-color:#c4cfdf;
            position: absolute;
    right: 600px;
    width: 300px;
    padding: 12px;
    top:160px;
}
        .username{
            margin:20px;
        }
        .password{
            margin:20px;
        }
        .gender{
            margin:20px;
            text-align: -webkit-auto;
            margin-left:110px;4
        }
        .country{
            margin:20px;
        }
    </style>
    
    <title>form</title>
</head>
<body>
    <div class="container">
        <h2>--REGISTRATION FORM</h2>
    
    <form action="login.php" method="post">
        <center>
        <div class="username">
            USERNAME: <input type="text" name="name" required><br>
            </div>
            <div class="password">
            PASSWORD: <input type="password" name="password" required><br>
            </div>
            
           <div class="gender">
               
             GENDER:<br><input type="radio" name="gender" value="male">MALE<br>
                    <input type="radio" name="gender" value="female">FEMALE<br>
                    <input type="radio" name="gender" value="other">OTHER<br>
                    </div>
    
            <div class="country">
                   COUNTRY: <select id="country" name="country">Country
                        <option value="INDIA">INDIA</option>
                        <option value="US">US</option>
                        <option value="UK">UK</option>
                    </select><br>
                    </div>
                    <div class="dob">
            DATE OF BIRTH:<input type="date" name="Birthdate"><br><br>
            </div>
            <div class="submit">
            <input type="submit" style="color": lightblue;">
            <input type="submit" name="Cancel" value="Cancel">
            </div>
    </center>
    </form>
</div>
    
</body>
</html> 