<?php
abstract class car{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    abstract public function intro():
    string;
    }
    class audi extends car{
        public function intro() : string{
            return "choose german quality!i'm an $this->name!";
            
    }
}
$audi=new audi("audi");
echo $audi->intro();
echo"<br>";
?>