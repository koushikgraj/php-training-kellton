<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   //simple array program 
   $a = [10,20,30,40];
  echo  $a[0]."<br>";
  echo $a[1]."<br>";
  echo $a[2]."<br>";
  echo $a[3]."<br>";
   echo "<br>";

   //printing array using the print_r function
   print_r($a);

   echo "<br>";

   //using the pre tag of html

   echo "<pre>";
   print_r($a);

   echo "</pre>";
   ?>

</body>
</html>