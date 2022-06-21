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
   
   
   echo "<table border='2px' cellpadding='6px' cellspacing='0px'>";
  
   for($y=1; $y<=10; $y++){
  
      echo "<tr>";
  
   for($x=1; $x<=10; $x++)
   {
    echo "<td>$x *  $y = ".$y*$x."   </td>  ";
   }
      echo "</tr>";
}

echo "</table>";






echo "<br>";







$b=2; 

for($a=1; $a<=10; $a++)
{
  echo "$b * $a  =" . $a*$b." <br>";

}
   
   
   
   ?>
</body>
</html>