<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
echo "<br>";
$date=date_create("2022-06-08");
echo date_format($date,"Y/m/d");
echo "<br>";
$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
echo"<br>";
$date=date_create("2013-03-15");
echo date_format($date,"Y/m/d H:i:s");
echo"<br>";
echo("<h2>india, andhra pradesh</h2>");
echo("Date: " . date("D M d Y"));
echo("<br>Sunrise time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
echo("<br>Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
echo"<br>";
print_r(getdate());
echo "<br><br>";
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
?>

</body>
</html>