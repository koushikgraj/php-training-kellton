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
   echo "The elements are printed using the<b> for loops</b>:";
   $arr=[10,23,34,45,56,76];
   for($i=0; $i<6; $i++)
   {
       echo "Elements are: $arr[$i]  <br>";
   }
echo "<br>";





echo "This is output of array element by<b> foreach</b> loop:";
$x=[12,23,34,45,56,567,67];
foreach($x as $val)
{
    echo $val."<br>";
}












echo "<br>";


echo "<ul>";
echo "This is <b>unordered list </b>of the array elements:";
   for($i=0; $i<6; $i++)
   {
       echo "<li>Elements are: $arr[$i]  </li>";
   }
   echo "</ul>";
   echo "<br>";








echo "This is <b>ASSOCIATIVE ARRAY</B><br>:";
$b=["aaa"=>12,
"bbb"=>23,
"ccc"=>34,
"ddd"=>45];
echo $b["aaa"]."<br>";
echo $b["bbb"]."<br>";
echo $b["ccc"]."<Br>";
echo $b["ddd"]."<br>";
   
   
   
   echo "<br>";
   echo "Associative arr element by <b>ForEach loop</b>";
   $s=
   ["a"=>12,
   "b"=>23,
   "c"=>34,
   "d"=>45];
   foreach($s as $m)
   {
       echo $m."<br>";
   }
   


echo "<br>";

   echo "ASSOCIATIVE arra with<B> key and value</b> using for each loops:<br>";
$f=[
    "a"=>12,
    "b"=>23,
    "c"=>34,
    "d"=>45
];
foreach($f as $k=>$v)
{
    echo " $k = $v <br>"; 
}





echo "Associative array<b> unordered list</B> in foreach loop:<br>";

$d=
["a"=>12,
"b"=>23,
"c"=>34,
"d"=>45
];
echo "<ul>";
foreach($d as $k => $val)
{
    echo "<li>$k = $val.</li>";
}
echo "</ul>";






echo "Associative array<b> Ordered list</B> in foreach loop:<br>";

$d=
["a"=>12,
"b"=>23,
"c"=>34,
"d"=>45
];
echo "<ol>";
foreach($d as $k => $val)
{
    echo "<li>$k = $val.</li>";
}
echo "</ol>";




   ?>

</body>
</html>