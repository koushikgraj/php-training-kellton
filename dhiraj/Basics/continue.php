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
for($a=1; $a<=20; $a++){
    if($a==3)
    {
        echo "Three is not here:<br>";
        continue;
    }
    echo $a. "<br>";
}

echo "<br>";
for($a=1; $a<=20; $a++){
    if($a>=5 && $a<=15){
        continue;
    }
    echo $a. "<br>";
}

?>
</body>
</html>