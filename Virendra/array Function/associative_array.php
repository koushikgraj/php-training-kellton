<?php
// First method to associate create array.

$sallary =array("viren" => 20000,"sagar" =>2000,"shubham" =>20000, 100=>342 ,"nikhil" =>100,"rahul" =>300);


 echo "Sallay of Viren is ". $sallary['viren'] ."</br>";
 echo "Sallary of Sagar is ". $sallary['sagar']. "</br>";
 echo "Sallary of Shubham is ". $sallary['shubham']. "</br>";
 echo "Sallary of Nikhil is ". $sallary['nikhil']. "</br>";
 echo "Sallary of Rahul is ". $sallary['rahul']."</br>";
 
  /* Second method to create array. */

  $sallary['viren'] ="high";
  $sallary['sagar'] ="medium";
  $sallary['shubham']= "low";
 
  echo "Sallary of Viren is ".$sallary['viren']."</br";
  echo "Sallary of Sagar is ".$sallary['sagar']."</br>";
  echo "Sallary of Shubham is ".$sallary['shubham']."</br>";
   echo "</pre>";
   print_r($sallary);
   echo"</pre>"

// var_dump($sallary);

?>