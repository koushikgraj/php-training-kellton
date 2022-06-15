<?php
session_start();

$_SESSION["web"] = "Google";
$_SESSION["color"] = "purple";

echo "session variable set.";
?>