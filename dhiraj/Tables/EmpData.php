<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
   <?php
   
    
   
   //THIS IS A MULTIDIMENSIONAL INDEXED ARRAY
   $emp = [
       [1,"Krishana","Manager",50000],
       [2,"Salman","salesman",200000],
       [3,"Mohan","Computer operater",12000],
       [4,"Aman","driver",15000],
       [5,"Ravi","accountant",5000],
       [5,"Ravi","accountant",5000]

   ];
   echo "<table border='1px' cellpadding='5px' cellspacing='0px'>";

    echo "<tr>
   <th>Emp Id.</th>
   <th>Name</th>
   <th>Designation</th>
   <th>Salary</th>
</tr>";

   foreach($emp as list($id,$name,$designation,$salary)){
       echo "<tr>
       
       <td>$id</td>
       <td>$name</td>
       <td>$designation</td>
       <td>$salary</td>
    
       </tr>";
   }
   echo "</table>";
   ?>


</body>
</html>

 