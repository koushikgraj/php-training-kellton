<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "These  are glocal variable and cant be used in functions.<br>";
    echo $a=10,"<br>";
echo $b=20,"<br>";

function x()
{
    global $a, $b;
    $a= $a+$b;
}

x();
echo "<br>";
echo $a;







    ?>

</body>
</html>