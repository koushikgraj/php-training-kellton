<html>
    <head>
        <title>view</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE['count'])){
        echo "first time visit 1st time.";
        $cookie=1;
        setcookie("count",$cookie);
    }
    else{
        $cookie =++$_COOKIE['count'];
        setcookie("count",$cookie);
        echo "you have visited".$_COOKIE['count']."times.";
    }
    ?>
</body>

</html>