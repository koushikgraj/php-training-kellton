<?php
 
  $arr = [56,87,90,34,23,55];
  echo "<hr/>";
  echo "<pre>";
  print_r($arr);
  echo "</pre><br>";
  echo "<hr/><br>";

  $arr1 = ["Suhas","PHP","Kaushik"];
  echo "My name is ".$arr1[0]."<br>";
  echo "I undergoes ".$arr1[1];
  echo " training by ".$arr1[2]." sir.<br>";
  echo "<hr/><br>";

  $arr2 = ["rajesh"=>"Bihar","ramesh"=>"Delhi","suresh"=>"punjab"];
  echo "<pre>";
  print_r($arr2);
  echo "<pre><br>";
  echo "<hr/><br>";

  $arr3 = [[1,2,3,],
           [4,5,6],
           [7,8,9]];

           for ($a = 0; $a < 3; $a++) {
           
            echo "<ul>";
            for ($b = 0; $b < 3; $b++) {
              echo "<li>".$arr3[$a][$b]."</li>";
            }
            echo "</ul>";
          }    
  echo "<hr/><br>";    
  
 

?>

