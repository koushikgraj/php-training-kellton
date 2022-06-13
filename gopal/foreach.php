<?php
ni_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$age=array("sam=>34","cam=>35","akhil=>36");
foreach ($age as $x => value){
    echo "$x => $val<br>";
}
?>