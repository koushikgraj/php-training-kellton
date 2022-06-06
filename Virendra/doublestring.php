<?php

$start_time = microtime(true);
$a =20;
echo $a,"<br>";
$a =10.40;
echo $a,"<br>";
$a ="String";
echo $a ="<tr>";
$end_time = microtime(true);
// Calculate script execution time
$execution_time = ($end_time - $start_time);
  
echo " Execution time of script = ".$execution_time." sec";


?>