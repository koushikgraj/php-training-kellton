<?php
class NumberCalc{
    var $a;
    var $b;

    public function mulNumbers()
    {
        return $this->a * $this->b;
    }
}

$obj = new NUmberCalc();
$obj->a=3;
$obj->b=8;
echo $obj->mulNumbers()
?>