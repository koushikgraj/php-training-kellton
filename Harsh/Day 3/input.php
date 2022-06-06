
<?php
if(isset($_POST['btnsubmit'])){
	echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input tags</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<center>
    <input type="checkbox"name="checkbox">I HAVE APPLE<br><br>
    <input type="color"name="color"><br><br>
    <input type="date"name="date"><br><br>
    <input type="datetime-local"name="local"><br><br>
     <input type="time"name="time"><br><br>
     
    <input type="week"name="week"><br><br>
    <input type="submit"name="btnsubmit"><br><br>
    <input type="reset"name="reset"><br><br>
    </center>
</form>
    
</body>
</html>