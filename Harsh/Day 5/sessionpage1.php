 <!-- page 1 -->
<?php
session_start();
?>
<html>
    <body>
    <?php
    //setting session variable
$_SESSION["name"] = "Harsh";
$_SESSION["email"] = "harsh@gmail.com";
echo "Session variables are set.";

?>


    </body>
</html>