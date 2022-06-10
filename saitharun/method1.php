<?php
    echo "<h3> Example for _LINE_ <h3>";
    // print Your Current line number i.e;4
    echo "You are at line number" . __LINE__ . "<br><br>";

    echo "<h3> Example for _FILE_ <h3>";
    // print full path of file with .php extenstion
    echo __FILE__ . "<br><br>";

    echo "<h3> Example for _DIR_ <h3>";
    // print full path of directory where script will be placed
    echo __DIR__ ."<br><br>";
    //below output will equivalent to above one.
    echo dirname (__FILE__) ."<br><br>";
    ?>