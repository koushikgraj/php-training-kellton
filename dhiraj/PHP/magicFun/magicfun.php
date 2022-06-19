<?php
echo "Example __LINE__";
echo "you are in line number " . __LINE__ . "<br><br>"; 

echo "Example for __FILE__";
echo __FILE__ . "<br><br>";

echo "Example for __DIR__";
echo __DIR__. "<br><br>";

echo dirname(__FILE__). "<br><br>";



echo "Example __FUNCTION__";
function test (){
    echo "The function ".__FUNCTION__."<BR><BR>";

}

test();
function test_function(){
    echo 'Hello<br>';
    echo __FUNCTION__;
}
test_function();
echo "-----test it------ ".__FUNCTION__."<br><br>";


?>