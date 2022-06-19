<?php
echo "Today is::d::: ".date("d")."<br>";
echo "Today is:::j::: ".date("j")."<br>";
echo "Today is::jS::: ".date("jS")."<br>";
echo "<br>";
echo "Month is::F::: ".date("F")."<br>";
echo "Month is::m::: ".date("m")."<br>";
echo "Month is::n::: ".date("n")."<br>";
echo "Month is::M::: ".date("M")."<br>";
echo "<br>";
echo "Year is:::Y::: ".date("Y")."<br>";
echo "Year is:::y::: ".date("y")."<br>";
echo "<br>";
echo "Full Date Is::::d/m/Y::::".date("d/m/Y")."<br>";
echo "Full Date Is::::d-m-y::::".date("d-m-y")."<br>";
echo "Full Date Is::::Y-m-d::::".date("Y-m-d")."<br>";
echo "Full Date Is:::Y-M-d:::::".date("Y-M-d")."<br>";
echo "<br>";
echo "Week Day Is:::::D:::::".date("D")."<br>";
echo "Week Day Is:::::N:::::".date("N")."<br>";
echo "Week Day Is:::::w:::::".date("w")."<br>";
echo "Week Day Is:::::l:::::".date("l")."<br>";
echo "<br>";
echo "Day Is::::z:::::".date("z")."<br>";
echo "<br>";
echo "Week Of Year is:::::W:::::".date("W")."<br>";
echo "<br>";
echo "Day in Month:::::t:::::".date("t")."<br>";
echo "<br>";
echo "Leap or Not:::::L:::::".date("L")."<br>";
echo "<br>";

$date= date_create("2023-03-15");
echo "checking day of that date----". date_format($date,"l");
echo "<br>";

echo "checking is this date exists----". checkdate(2,13,2014); 
echo "<br>";

$date1= date_create("2023-12-15");
$a= date_diff($date,$date1);
echo"The diff is---=". $a->format("%r%a");
echo "<br>";

echo date_default_timezone_get();
echo "<br>";

date_default_timezone_set("Asia/Bangkok");
echo date_default_timezone_get();
echo "<br>";

date_create("gyuiyiuyui%&&/");
echo "<pre>";
print_r(date_get_last_errors());
echo "</pre>";
echo "<br>";

$date6=date_create("2013-05-01");
date_modify($date,"+15 days");
echo date_format($date6,"Y-m-d");
echo "<br>";
echo "<br>";

$date7=date_create("2013-03-15");
date_sub($date7,date_interval_create_from_date_string("40 days"));
echo date_format($date7,"Y-m-d");
echo "<br>";
echo "<br>";

$date8=date_create("2013-05-01");

date_time_set($date8,13,24);
echo date_format($date8,"Y-m-d H:i:s") . "<br>";
echo "<br>";
echo "<br>";

date_time_set($date8,12,20,55);
echo date_format($date8,"Y-m-d H:i:s");
echo "<br>";
echo "<br>";

$date=date_create("2013-05-25",timezone_open("Indian/Kerguelen"));
echo date_format($date,"Y-m-d H:i:sP") . "<br>";

date_timezone_set($date,timezone_open("Europe/Paris"));
echo date_format($date,"Y-m-d H:i:sP");
echo "<br>";
echo "<br>";

// Print the array from gettimeofday()
echo "<pre>";
print_r(gettimeofday());
echo "</pre>";
echo "<br><br>";

// Print the float from gettimeofday()
echo gettimeofday(true) . "<br><br>";

// Return current time; then format the output
$mytime=gettimeofday();
echo "$mytime[sec].$mytime[usec]";
echo "<br>";
echo "<br>";


// Prints: October 3, 1975 was on a Friday
echo "Oct 3, 1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br><br>";

//The mktime() function is useful for doing date arithmetic and validation.
//It will automatically calculate the correct value for out-of-range input:
echo date("M-d-Y",mktime(0,0,0,12,36,2001)) . "<br>";
echo date("M-d-Y",mktime(0,0,0,14,1,2001)) . "<br>";
echo date("M-d-Y",mktime(0,0,0,1,1,2001)) . "<br>";
echo date("M-d-Y",mktime(0,0,0,1,1,99)) . "<br>";
echo "<br>";
echo "<br>";





?>