<?php
session_start();

print_r($_SESSION);
echo "<br>"."<br>";
?>
<html>
    <head><title>Session page2<tittle></head>
    <body>
    <?php
    echo "welcome to ".$_SESSION["web"]."<br>";
    echo "fav colour is  ".$_SESSION["colour"]."<br>";
    ?>
<body>
</html>        
    

