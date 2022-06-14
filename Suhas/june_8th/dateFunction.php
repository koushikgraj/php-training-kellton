<?php
   $date = checkdate(12,03,2012);
   echo var_dump($date)."<br>";

   $date = date_create(20-05-2019);
   echo date_format($date, 'd/m/Y')."<br>";

   echo date("l dS \of F h:i:s A")."<br>";

   $date1 = date_create(2013-05-22);
   $date2 = date_create(2021-04-23);
   $diff=date_diff($date1,$date2);
   echo $diff->format("%R%a days");
?>