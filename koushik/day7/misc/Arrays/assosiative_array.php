 <?php
/* First method to associate create array. */
 $salaries = array("ram" => 2000, "dev" => 2000, "shiv" => 2000, 100=> 342, "ram"=>3400);
 
 echo "Salary of Ram is ". $salaries['ram'] . "<br />";
 echo "Salary of Dev is ".  $salaries['dev']. "<br />";
 echo "Salary of Shiv is ".  $salaries['shiv']. "<br />";
 echo "Salary of 100 is ".  $salaries[100]. "<br />";
 
 /* Second method to create array. */
 $salaries['ram'] = "high";
 $salaries['dev'] = "medium";
 $salaries['shiv'] = "low";
 
 echo "Salary of Ram is ". $salaries['ram'] . "<br />";
 echo "Salary of Dev is ".  $salaries['dev']. "<br />";
 echo "Salary of Shiv is ".  $salaries['shiv']. "<br />";
 echo "<pre>";
print_r($salaries);
echo "</pre>";

var_dump($salaries);
?>