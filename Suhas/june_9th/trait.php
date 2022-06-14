<?php
trait t1
{
    function sample1()
    {
        for ($i=0;$i<=10;$i++)
        {
            echo "enterd nummber is ".$i;
            echo "<br>";
        }
    }
}

trait t2
{
    function sample2()
    {
        echo "traits are used within the classes by using USE keyword.<br><br>";
    }
}

class Demo1
{
    use t1;

    function Details($name,$number)
    {
        echo "Name = ".$name."<br>";
        echo "Number = ".$number."<br>";
    }
}
class Demo2 extends Demo1
{
    use t2;
}

$obj1 = new Demo1();
$obj1->sample1();

echo "<br><br>";

$obj2= new Demo2();
$obj2->sample2();
$obj2->Details("Suhas Surwase","9890361432");
?>