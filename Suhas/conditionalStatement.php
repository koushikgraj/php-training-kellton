<?php
echo "numbers are :<br>";
for($i = 1; $i<=10; $i++)
{
   if($i==8)
    break;
    echo "num : ".$i."<br>";
}
echo "<br><br>";

echo "Name of Technologies<br>";
$arr = ["1st"=>"JAVA","2nd"=>"PHP","3rd"=>".net"];

foreach ($arr as $key => $value)
{
    echo "$key is $value"."<br>";
    
}
?>