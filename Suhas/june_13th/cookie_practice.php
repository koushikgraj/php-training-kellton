<?php
setcookie("name","Yash",time()+3600,"/");
setcookie("count",isset($_COOKIE['count']) ? $_COOKIE['count']+1 : 1,time()+3600,"/");
?>

<html>
    <head>
        <title>Cookie Practice</title>
    </head>
    <body>
        <?php
        if(isset($_COOKIE['name']))
        {
            echo "my name is ".$_COOKIE['name'] ."<br>";
        }

        if(isset($_COOKIE['count']))
        {
            echo "user visited for this page " . $_COOKIE['count'] ." times <br>";
        }

        ?>
    </body>
</html>

<html>
    <head>
        <title>Cookie delete Practice</title>
    </head>
    <body>
        <?php
       setcookie("name","",time()-60,"/","");
       setcookie("count","",time()-60,"/","");
        ?>
    </body>
</html>