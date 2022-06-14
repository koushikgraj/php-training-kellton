<!DOCTYPE html>
<?php
if(isset($_POST['btnsubmit'])){
	echo "<pre>";print_r($_POST);echo "</pre>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> -->
<div class ="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="email" name="email"><br><br>
<input type="file" name="field"><br><br>
<input type="hidden" name="hidden"><br><br>
<input type="image" sre="dk.jpeg" name="image" ><br><br>
<input type="month" name="month"><br><br>
<input type="number" name="number"><br><br>
<input type="password" name="pass"><br><br>
<input type="radio" value="About" name="radio">About<br><br>
<input type="range" name="range"><br><br>
<input type="reset" name="reset"><br><br>
<input type="search"  name=" search" placeholder="search"><br>
<input type="submit" name="btnsubmit" value="click here"><br><br>
<input type="tel" name="tel"><br><br>
<input type="text" name="txt"><br><br>
<input type="time"name="time"><br><br>
<input type="url" name="url"><br><br>
<input type="week" name="week"><br><br>
<!-- <select type="week" name="week"><br><br> -->
<textarea type="textarea" name="desc" cols="30" rows="10" placeholder="others"></textarea><br>
<select class="select" name="country" id ="car">
          <option value="NO-country">Select Your Country</option>
          <option value="NO-country">INDIA</option>
          <option value="NO-country">NEPAL</option>
          <option value="NO-country">JAPAN</option>
          <option value="NO-country">US</option> 
          <option value="NO-country">UK</option>
          </select><br>

</form>
</div>
</body>
</html>


