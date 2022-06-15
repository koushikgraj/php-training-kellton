<?php
  setcookie("name","Rajan");
  setcookie("email","123@abc.com");


  if(isset ($_COOKIE['name']))
  {
      echo "name = ".$_COOKIE['name']."<br>";
  }
  if(isset ($_COOKIE['email']))
  {
      echo "Email = ".$_COOKIE['email']."<br>";
  }
else
  echo "no any cookie is set or ERROR";
?>