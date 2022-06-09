<?php
class Sandeep{
    public $name="nanaji";
    public $roll="495";
    public function show($name,$roll){
      //  $this->name= $name;
     //   $this->roll=$roll;
        echo "Sandeep Information  "  .$this->name. " having" .$this->roll. " b.tech in gni";
        
    }


}
$obj=new Sandeep();
$obj->name;
$obj->roll;
$obj->show("nanaji","496");
?>