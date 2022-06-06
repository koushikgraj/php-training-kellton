<?php
$start_time=microtime(true);
$i=10;
echo $i. "<br>";
$i=10.44;
echo $i. "<br>";
$i="Nani";
echo $i;
$execution_time = ($end_time - $start_time);
  
echo " Execution time of script = ".$execution_time." sec";
?>