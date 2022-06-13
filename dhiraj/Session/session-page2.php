
<?php
session_start();
//code printing the data in the session variable 
//in session age1
  echo "Your session Name is :::::::::" . $_SESSION['a'];
  echo "<br>";
  echo "Your session E-mail is :::::::::: " . $_SESSION['b'];
  
echo "<br>";

?>

<?php
//   //1. How to start session
//    session_start();
   $a ="Dhiraj";
   
   if( isset( $_SESSION['counter'] ) ) {
	   //from second time visitors
      $_SESSION['counter'] += 1;
   }else {
	   //first time visitor
      $_SESSION['counter'] = 1;
   }
//2. How to call a session
   $msg = "$a visited this page ".  $_SESSION['counter'].' times ';
?>

<html>
   
   <head>
      <title>Setting up a PHP session</title>
   </head>
   
   <body>
      <?php  echo ( $msg ); ?>
   </body>
   
</html>
