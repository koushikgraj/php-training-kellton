<?php
$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("50 days"));
echo date_format($date,"Y-m-d");
echo"<br>";
$date=date_create_from_format("j-M-Y","15-Mar-2013");
echo date_format($date,"Y/m/d");
echo "<br>";
$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
echo "<br>";
$date=date_create("2013-03-15");
echo date_format($date,"Y/m/d H:i:s");
echo"<br>";
$date=date_create("2013-05-01");
date_modify($date,"+15 days");
echo date_format($date,"Y-m-d");
echo"<br>";
$date=date_create("2013-05-01");

date_time_set($date,13,24);
echo date_format($date,"Y-m-d H:i:s") . "<br>";

date_time_set($date,12,20,55);
echo date_format($date,"Y-m-d H:i:s");
echo"<br>";
$date=date_create(null,timezone_open("Europe/Paris"));
$tz=date_timezone_get($date);
echo timezone_name_get($tz);
echo"<br>";
$date=date_create("2013-05-25",timezone_open("Indian/Kerguelen"));
echo date_format($date,"Y-m-d H:i:sP") . "<br>";

date_timezone_set($date,timezone_open("Europe/Paris"));
echo date_format($date,"Y-m-d H:i:sP");
?>


?>