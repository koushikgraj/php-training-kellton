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
    echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";
   
    for($col=1; $col<=100; $col+=10){
        echo "<tr>";
    for($row=$col; $row<$col+10; $row++){
        echo  "<td>$row</td>";
    }
    echo "</tr>";
}
    echo "</table>";
    
    ?>

</body>
</html>