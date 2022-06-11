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
/*in this the function returns is value in the variable x so when we call the fuction 
then it will not print any thing so we need to echo the function*/

function a($fname="fname",$lname="lname"){
    $x=$fname."  "  .$lname."<br>";
    return $x;
}
//like this we need to echo the function to get output
//without echo the function will not print anything
echo a();
echo a(100,200);
echo a("Dhiraj","Yadav");



echo "<br>";

function x($fname="fname",$lname="lname"){
    $b=$fname." ".$lname."<br>";
    return $b;
}
$aa=x();
$bb=x("Dhiraj","Yadav");
$cc=x(1000,5000);

echo "hello $aa";
echo "hello $bb";
echo "hello $cc";


?>

</body>
</html>