<?php

echo "This is output of array element by<b> FOR-EACH</b> loop:<br>";
$x=[12,23,34,45,56,567,67];

    foreach($x as $val){
        echo $val . "<br>";
    }

    
    
    
    
    
    echo"<br>";
    echo"<br>";

echo "This is output of MultiDimensionalarray element Using<b> FOR-EACH</b> loop:<br>";
$x=[[12,23,34,45,56,567,67],
[12,23,34,45,56,567,67],
[12,23,34,45,56,567,67],
[12,23,34,45,56,567,67],
[12,23,34,45,56,567,67],
[12,23,34,45,56,567,67]];
foreach($x as $y){
    foreach($y as $val){
        echo $val . "  ";
    }
echo"<br>";
    }

?>