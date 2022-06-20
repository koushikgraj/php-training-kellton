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
$aee=[
    [1,"Dhiraj","Engineer","CSE"],
    [2,"Ravi","Engineer","CSE"],
    [3,"Asraph","Engineer","CIVIL"],
    [4,"Saim","Engineer","IT"],
    [5,"Ajit","Engineer","ME"]
    
];





echo "Output using <b>Double for loops:</B><br>";
for($i=0; $i<=4; $i++)
{
    for($j=0; $j<=3; $j++)
    {
        echo $aee[$i][$j]." ";
    }
    echo "<br>";
}
echo "<br>";




echo "Using <b>Double foreach loops</b>.<br>";
foreach($aee as $v){
    foreach($v as $v1){
        echo $v1."   ";
    }
    echo "<br>";
}





echo "<br>";
echo "<table border='1px' cellpadding='3px' cellspacing='0px'>";
echo "Using <b>Double foreach loops</b>.<br>";
echo "<tr>
<th>Id.</th>
<th>Name</th>
<th>Profession</th>
<th>Branch</th>
</tr>";
foreach($aee as $v){
    echo"<tr>";
    foreach($v as $v1){
        echo"<td> $v1</td>";
    }
    echo "</tr>";
}
echo "</table>";







echo "<br>";
echo "<b>MultiDimensional Associative Array:</b>";
$arr=
[
    "krishana"=>[
        "physics"=>34,
        "math"=>35,
        "chemistry"=>36,
        "biology"=>37],

    "salman"=>["physics"=>41,
        "math"=>42,
        "chemistry"=>43,
        "biology"=>44],

    "amir"=>["physics"=>51,
            "math"=>52,
        "chemistry"=>53,
        "biology"=>54]
    ];
echo "<pre>";
print_r($arr);
echo "</pre>";


echo "<br>";
echo "Associative array using<b> double for loops:</b><br>";
foreach($arr as $key => $a){
    echo "$key  ";
    foreach($a as  $b){
        echo "   $b " ;
    }
    echo "<br>";
}





echo "<br>";
echo "Associative array <b> Table </b> using<b> double foreach loops:</b><br>";
echo "<table border='1px' cellpadding='3px' cellspacing='0px'>";
echo "<tr>
<th>Stu. Name</th>
<th>Physics</th>
<th>Math</th>
<th>Chemistry</th>
<th>Biology</th></tr>";

foreach($arr as $key => $a){
    echo "<tr><td>$key</td>";
    foreach($a as  $b){
        echo " <td>  $b </td>" ;
    }
    echo "</tr>";
}
echo "</table>";










    ?>

</body>
</html>