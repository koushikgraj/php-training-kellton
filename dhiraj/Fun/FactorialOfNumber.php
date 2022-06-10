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
$n=5;
$factorial=1;
for($i=1; $i<=$n; $i++)
{
    $factorial=$factorial*$i;
    
    echo "Line :$i    =   $factorial    ===    $factorial    *    $i <br>";
}
echo "Factorial===$factorial <br>";

?>

</body>
</html>