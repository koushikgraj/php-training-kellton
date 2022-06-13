<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
you selected:<br>
    <?php
if(isset($_REQUEST["c1"])){
    echo $_REQUEST["c1"],"<br>";
}

if(isset($_REQUEST["c2"])){
    echo $_REQUEST["c2"],"<br>";
}




?>
</body>
</html>