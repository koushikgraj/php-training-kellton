<!-- 1. Create a simple variable with integer and Convert it as string & double during execution -->
<?php
$start_time = microtime(true);
$a=2.2;
echo $a."<br>";
$a=20;
echo $a."<br>";
$a="string";
echo $a;
$end_time = microtime(true);
// Calculate script execution time
$execution_time = ($end_time - $start_time);
  
echo " Execution time of script = ".$execution_time." sec";
?>