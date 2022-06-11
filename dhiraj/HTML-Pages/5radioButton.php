<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Your are: 
<?php
if(isset($_REQUEST["gen"])){
    echo $_REQUEST["gen"];
}else{
    echo "Dont want to specify";
    
}


    ?>

</body>
</html>