<?php
$a="sandeep kumar";
echo chop($a)."<br>".bin2hex($a)."<br>";
echo strlen($a)."<br>";
echo strtolower($a)."<br>".strtoupper($a)."<br>";
echo chunk_split($a,1," ")."<br>";
echo str_replace("sandeep","sandy",$a)."<br>".str_repeat($a, 3)."<br>";


?>