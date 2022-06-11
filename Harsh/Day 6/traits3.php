<?php
trait fruits{
    public function apple(){
        echo"fruits<br>";
    }
}
// trait vegetable{
//     public function tomato(){
//         echo "vege";
//     }
// }
class A{
    use fruits;
}
class B{
    use fruits;
}

$obj = new A();
$obj2 = new B();
$obj>apple();
$obj2->apple();


?>