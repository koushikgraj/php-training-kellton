<?php
$date=date_create("2022-03-15");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");

echo "<br><br>";
?>



<?php
print_r(localtime());
echo "<br><br>";
print_r(localtime(time(),true));
?>