<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSE IF STMT</title>
</head>
<body>
    <?php
    $x = 34;

    if($x>=60 && $x<=100):
        echo "merit";
        elseif ($x>=40 && $x<60):
            echo "first division";
            elseif ($x>=30 && $x<40):
                echo "second division";
                elseif ($x<30):
                echo "fail";
            else:
                echo "enter valid percentage";
            endif;
    ?>
</body>
</html>