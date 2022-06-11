<?php
trait Mytrait{
    public function gettraitname(){
        return __TRAIT__;
    }
}
    class A{
        use Mytrait;
    }

$obj=new A();
echo $obj->gettraitname();
?>