<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Demo</title>
</head>
<body>
    <?php
    $arr= array("AAA","BBB","CCC","DDD");
    echo "<table border='3px' cellpadding='4px' cellspacing='0px'>";
    echo "<tr>
    <th>Arrays Elements</th>
    </tr>";
    for($a=0; $a<4; $a++)
    {
        echo "<tr><td>$arr[$a] </td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>