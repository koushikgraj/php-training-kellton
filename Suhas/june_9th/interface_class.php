<?php
  interface Demo1
  {
      function name($fname,$lname);
     
   
      
  }
  interface Demo2
  {
      function email($mail);
  }

  class first implements Demo1 , Demo2 
  {
      function name($fname,$lname)
      {
          echo "my name is $fname $lname & ";
      }

      function email($mail)
      {
          echo "$mail this is my mail.";
      }
  }

  $obj = new first();
  $obj->name("Suhas","Surwase");
  $obj->email("suhas@gmail.com");
?>