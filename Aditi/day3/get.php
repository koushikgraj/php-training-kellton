<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>get method</title>
</head>
<body>

   <form action="?<?php $_PHP_SELF ?>" method="GET">
     Name: <input type="text" name="name" />
     Age:  <input type="text" name="age" />
           <input type="submit" />
   </form>

</body>
</html>

<?php

   if($_GET['name'] || $_GET['age']){
      echo "Welcome". $_GET['name']. "<br />";
      echo "Your age is ". $_GET['age']. "<br />";

      exit();
   } 

?>
