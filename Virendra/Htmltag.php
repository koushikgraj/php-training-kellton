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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<center>
<input type="button" name ="btn">
<br><br>
<input type="checkbox" name="chcbx">
<br><br>
<input type="color" name="clr">
<br><br>
<input type="date" name="date">
<br><br>
<input type="datetime-local" name="datelocal">
<br><br>
<input type="email" name="emailid" >
<br><br>
<input type="file" name="file">
<br><br>
<input type="hidden" name="hidden">

<br><br>
<input type="image" name="image">
<br><br>
<input type="month" name="mnth">
<br><br>
<input type="number" name="nmber">
<br><br>
<input type="password" name="psswrd">
<br><br>
<input type="radio" name="radio">
<br><br>
<input type="range" name="range">
<br><br>
<input type="reset" name="reset">
<br><br>
<input type="search" name="srch">
<br><br>
<input type="submit" name="btnsubmit" value="Click Here">
<br><br>
<input type="tel" name="telphone">
<br><br>
<input type="text" id="fname" name="fname"><br><br>
<br><br>
<textarea id="textarea" name="review" rows="4" cols="50"> </textarea>
<br><br>
<input type="time" name="time">
<br><br>
<input type="url" name="url">
<br><br>
<input type="week" name="week">
</center>
</form>
</body>
</html>