<html>
<body>
<head> </head>
<?php
if(isset($_POST['btnsubmit'])){
	echo "<pre>";print_r($_POST);echo "</pre>";
}
?>
<center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="button"name="btn">
<br><br>
<input type="checkbox"name="checkbox">
<br><br>
<input type="color"name="clr">
<br><br>
<input type="date">
<br><br>
<input type="datetime-local"name="date">
<br><br>
<input type="email"name="e-mail_id">
<br><br>
<input type="file"name="file">
<br><br>
<input type="hidden"name="hidden">
<br><br>
<input type="image"name="img">
<br><br>
<input type="month"name="month">
<br><br>
<input type="number"name="num">
<br><br>
<input type="password"name="password">
<br><br>
<input type="radio"name="radio">
<br><br>
<input type="range"name="range">
<br><br>
<input type="reset"name="reset">
<br><br>
<input type="search"name="search">
<br><br>
submit:<input type="submit"name="btnsubmit">
<br><br>
<input type="tel"name="telephone">
<br><br>
<input type="text"name="text">
<br><br>
<input type="time"name="time">
<br><br>
<input type="url"name="url">
<br><br>
</center>
</form>
</html>
</body>