<?php
//__LINE__
//__FILE__
//__DIR__
//__FUNCTION__
//__CLASS__
//__METHOD__

echo "it is the line number ".(__LINE__);
echo "<br><br>";

echo "the file name is ".(__FILE__);
echo "<br><br>";

echo "the location of this file is ".(__DIR__);
echo "<br><br>";

function name()
{
    echo "the name of function is ".(__FUNCTION__);
    echo "<br>";
}
name();

?>