<?php 
session_start();

$_SESSION['name']="Suhas";
$_SESSION['email']="suhas@abc.com";
$_SESSION['number']="87463527871";

echo "set for session variable."

?>
<html>
    <head>
        <title>Session set</title>
    </head>
    <body>
        <?php
       // session_start();

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>
    </body>
</html>