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
function abc($a)
{
    if($a <= 5)
    {
        echo "$a  <br>";
        abc($a+1);
    }
}
abc(1);




?>
</body>
</html>