<?php
//check date
var_dump(checkdate(12,1,2003));
echo "<br>";
//add date
$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"d-m-y");
echo "<br>"

?>