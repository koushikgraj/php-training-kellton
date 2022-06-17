<?php 
$cookie_name = "abcd";
$cookie_value ="mona";
setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo"cookie is not set";
        }else{
            echo $_COOKIE[$cookie_name];
        }
        ?>
        </body>
        </html>