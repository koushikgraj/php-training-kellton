<?php
session_start();

print_r($_SESSION);
echo "<br>"."<br>";
?>
<html>
    <head><title>Session page2</title></head>
    <body>
    <?php
    echo "welcome to ".$_SESSION["web"]."<br>";
    echo "fav color is ".$_SESSION["color"]."<br>";
    ?>
</body>
</html>