<?php
$a = "My name is Nanaji.";
$b = "I am Hyd. ";
 echo str_replace("Nanaji","Nani",$a);
 echo "<br>";
 echo strrev($b);
 echo "<br>";
 echo str_repeat($a,2);
 echo "<br>";
 echo hebrev($a);
 echo "<br>";
 echo addcslashes($a,"N");
 echo "<br>";
 echo($a.$b);
 echo "<br>";
 print_r(str_split($a));
 echo "<br>";
 echo convert_uuencode($a);



echo strlen($a);
?>