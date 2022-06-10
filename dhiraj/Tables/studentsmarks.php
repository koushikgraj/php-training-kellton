<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Marks</title>
</head>
<body>
    <?php
    $stu = [
        ["Dhiraj", 55, 65, 78],
        ["Ram", 69, 65, 73],
        ["Hari", 93, 69, 68],
        ["Rakesh", 58, 83, 88]
    ];

    echo "<table border='1px' cellpadding='6px' cellspacing='0px'>";
    echo "<tr>
    <th>Name</th>
    <th>Physics</th>
    <th>Maths</th>
    <th>Science</th>
    </tr>";

foreach($stu as list($name,$physics,$math,$science)){
    echo "<tr>
    <td>$name</td>
    <td>$physics</td>
    <td>$math</td>
    <td> $science</td>
       </tr>";
}
echo "</table>";
?>

</body>
</html>