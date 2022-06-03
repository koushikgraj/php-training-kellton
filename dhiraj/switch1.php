<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True switch </title>
</head>
<body>
    <?php
    $a = 24;


    // now this switch statement will check all its cases as it is made true
    switch(true){

case($a >=15 && $a <=20):
    echo "Eligible";
    break;

case($a >=21 && $a <=30):
        echo "Not Eligible";
        break;

default:
echo "Enter valid age";       
    }



?>
</body>
</html>