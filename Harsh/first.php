<?php
function compare($a1,$a2){
    if($a1 === $a2){
        return 0;
    }
    return ($a1 > $a2 ? 1 : -1);
}

$a=array("a"=>"apple","b"=>"banana","c"=>"graps");
$b=array("a"=>"apple","b"=>"mango","c"=>"lemon");
$new=array_intersect_uassoc($a,$b,"compare");
echo"<pre>";
print_r($new);
echo"</pre>"
?>