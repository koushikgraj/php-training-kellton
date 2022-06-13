<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Printing the text area data:
</h1>
Your text area data is:<br> 
<?php

$text= $_REQUEST["data"];
echo str_replace("\n", "<br>", $text);




?>
</body>
</html>