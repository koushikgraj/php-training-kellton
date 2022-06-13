<?php
namespace myNamespace;
class Myclass{
    function getnamespace(){
        return __NAMESPACE__;
    }
}
$obj=new Myclass();
echo $obj->getnamespace();
?>