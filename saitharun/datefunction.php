<html>
<body>

<?php
// Prints the day
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A") . "<br>";

// Prints april 10, 2001 was on a Tuesday
echo "april 10,2001 was on a ".date("l", mktime(0,0,0,04,10,2001)) . "<br>";

// Use a constant in the format parameter
echo date(DATE_RFC822) . "<br>";

// prints something like: 2001-04-10T00:00:00+00:00
echo date(DATE_ATOM,mktime(0,0,0,04,10,2001));
?>

</body>
</html>