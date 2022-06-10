<?php
$list = array (
  array("Sachin", "Neha" ,"Renuka", "Deepak"),
  array("jay", "neeraj", "pallavi", "vire")
);

$file = fopen("contacts.csv","w");

foreach ($list as $line) {
  fputcsv($file, $line);
}

fclose($file);
?> 