<?php
class numbercalc{
    var $a;
    var $b;

    public function addnumbers()
    {
        return $this->a + $this->b;
    }
}
$obj = new numbercalc();
$obj->a=100;
$obj->b=200;
echo $obj->addnumbers();
?>