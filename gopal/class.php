<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class bike{
    //properties
    public $color;
    public $cc;
    //methods
    function set_name($color){
        $this->color=$color;
    }
    function get_name(){
        return $this->color;
    }
    }
$color=new bike();
$cc=new bike();
$color->set_name('green');
$cc->set_name('159');
echo $color->get_name();
echo $cc->get_name();
?>
