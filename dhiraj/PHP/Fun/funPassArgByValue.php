<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   



function wow($a){
     $a="HEY";
}
function wow1(&$a){
    $a="Sita";
}
$b="hello";
$c="ram";
wow($b);//it will print the hello in the place of hello as the value is only passed
echo "This is function wow to change hello to hay:  $b <BR>";
wow1($c);//it will prints the sita in the place of ram. as reference is passed
echo"This is function wow1 to change ram to  sita:   $c<BR>";
echo "<br>";






function test($string){
    $string.="and extra.";
}
function test1(&$string){
    $string .="and extra";
}
$str="The string";
test($str);
echo $str."<br>";
test1($str);
echo $str;
echo "<br>";




function first($num){
    $num+=5;
}
function second(&$num){
    $num+=5;
}
$number=10;
first($number);
echo "the number is : ".$number."<br>";
second($number);
echo "the number is : ".$number."<br>";



    
    
    
    ?>

    
</body>
</html>