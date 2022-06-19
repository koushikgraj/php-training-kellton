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
for($a=1; $a<=10; $a++){
    if($a==5){
break;
    }
    echo $a. "<br>";
}


for($a=1; $a<=30; $a++){
    if($a>=10 && $a<=20){
        continue;

    }
    echo $a."  ";
}




?>
</body>
</html>