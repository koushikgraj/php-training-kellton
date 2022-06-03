<!DOCTYPE html>

<html>
    <body>
        <h1>1 to 100 number Table</h1>
        <?php

        for($i=1; $i<=100;$i=$i+10)
        {
            for($j=$i; $j<$i+10;$j++)
            {
                echo $j." ";
            }
            echo "<br>";
        }
        ?>

    </body>
    </html>