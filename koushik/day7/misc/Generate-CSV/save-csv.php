<?php
$list = array (
  array("Sachin", "Rahul" ,"Virat", "Mahendra Singh"),
  array("Tendulkar", "Rahul Dravid", "Kohli", "Dhoni"),
  array("Ajay", "Dhiraj", "Suhas", "Sai Tarun", "Sandeep", "Harsh","Virendra","Gopal",'Nanaji'),
  array("Koushik")
);

$file = fopen("contacts-kellton.csv","w");

foreach ($list as $line) {
  fputcsv($file, $line);
}

fclose($file);
?>