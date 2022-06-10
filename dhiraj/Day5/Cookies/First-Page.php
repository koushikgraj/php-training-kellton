<html> 
  <head> 
    <title>PHP</title> 
 </head> 
<body> 
<?php 
if (!isset($_COOKIE['count'])) { 
  echo " first time you have viewed this page."; 
  $cookie = 1;
  setcookie("count", $cookie);
}else{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "You have viewed ".$_SERVER['PHP_SELF']." ".$_COOKIE['count']." times."; 
  }
?> 
  </body> 
</html>