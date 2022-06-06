<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Details</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    
    <div class="container">
  <h1><u> Enter Your Personal Details Here:</u></h1>
    <form>
    <input type="text" name="name" placeholder="Enter UserName"><br>
    
 <input type="password" name="pass" placeholder="Enter Your Password"><br>
     
 <h3>Gender:<input class="gen" type="radio" name="gender">
           <label >Male</label>
           <input type="radio" name="gender">
           <label >Female</label></h3><br>

 <select class="select" name="country" id ="car">
          <option value="NO-country">Select Your Country</option>
          <option value="NO-country">INDIA</option>
          <option value="NO-country">NEPAL</option>
          <option value="NO-country">JAPAN</option>
          <option value="NO-country">US</option>
          <option value="NO-country">UK</option>
          </select><br>
    
    <input type="date" name="date"><br>

    <button class="btn">Submit</button><br>
  
    <button class="btn">Cancle</button><br>

   

</form>  
</div>
<script src="ass2.js"></script>
</body>
</html>