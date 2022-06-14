<?php
trait solution1 {
    public function tri1(){
        echo "this is first triat .<br>";
    }
}
trait solution2{
    public function tri2(){
        echo "this is second trait";

    }
}
class nani{
    use solution1;
}
class garide extends nani{
    use solution1,solution2;
}
$obj1=new nani();
$obj2=new garide();
$obj1->tri1();
$obj2->tri1();
echo "<br>";
$obj2->tri2();
?>