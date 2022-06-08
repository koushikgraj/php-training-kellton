<?php
    echo "<h2> Example for LINE <h2>";
    // print Your Current line number i.e;4
    echo "You are at line number" . _LINE_ . "<br><br>";

    echo "<h2> Example for FILE <h2>";
    // print full path of file with .php extenstion
    echo _FILE_ . "<br><br>";

    echo "<h2> Example for DIR <h2>";
    // print full path of directory where script will be placed
    echo _DIR_ ."<br><br>";


    //below output will equivalent to above one.
    echo dirname (_FILE_) ."<br><br>";
?>