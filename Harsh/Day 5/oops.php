<?php
class bike {
    //properties
    public $color;
    public $cc;
    //methods
    public function start(){
        echo $this->color."-".$this->cc;
    }
    public function stop(){
        echo $this->color."-".$this->cc;
    }
    public function ride(){
        echo $this->color."-".$this->cc;
    }
    public function break(){
        echo $this->color."-".$this->cc;
    }

}
$t1=new bike();
$t1->color="red";
$t1->cc=100;
$t1->start();
$t1->stop();
$t1->ride();
$t1->break();

?>