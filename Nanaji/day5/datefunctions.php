<?php
echo var_dump(checkdate(02,11,2000))."<br>"; 
$date=date_create_from_format("j-M-Y","15-Mar-2003");
echo date_format($date,"Y/m/d");
echo "<br>";
$date1=date_create("2001-09-15");
$date2=date_create("2003-01-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
echo "<br>";
$date=date_create("2002-03-15");
echo date_format($date,"Y/m/d H:i:s");
echo"<br>";
$date=date_create("2000-05-01");
date_modify($date,"+15 days");
echo date_format($date,"Y-m-d");
echo "<br>";
echo date("m")."<br>";
echo date("l")."<br>";
echo "Oct 3, 1975 was on a ".date("l") . "<br>";
echo idate("H")."<br>";
print_r(localtime())."<br><br>";

echo strtotime("now")."<br>";
echo strtotime("18 september 2000")."<br>";


?>
