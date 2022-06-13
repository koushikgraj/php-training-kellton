<?php
trait fruits{
    public function apple(){
        echo"fruits<br>";
    }
}
trait vegetable{
    public function tomato(){
        echo "vege";
    }
}
class A{
    use fruits,vegetable;
}

$obj = new A();
$obj->apple();
$obj->tomato();

?>