<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>post method</title>
</head>
<body>

	<form action = "<?php $_PHP_SELF ?>" method = "POST">
       Name: <input type = "text" name = "name" />
       Age:  <input type = "text" name = "age" />
         	 <input type = "submit" />
    </form>

</body>
</html>

<?php
   if( $_POST['name'] || $_POST['age'] ) {
      
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You age is ". $_POST['age']. " <br />";
      
      exit();
   }
?>
