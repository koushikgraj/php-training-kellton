<?php
abstract class student
{
   
    abstract protected function name();
    abstract protected function age();
    abstract protected function profession($sex);
   
    public function getName(){
     return $this->name();
    }
}
class ManClass extends student
{
    protected function name() {
        return "virendra";
    }
public function age() {
        return 23;
    }
public function profession($sex){
     switch ($sex) {
      case 'male':
       $profession = "Engineer";
       break;
      case 'female':
       $profession = "Doctor";
       break;
      default:
       $profession = "Teacher";
       break;
     }
     return $profession;
    }
}
class WomanClass extends student
{
    protected function name() {
        return "Rahul";
    }
public function age() {
        return 25;
    }
public function profession($sex){
     switch ($sex) {
      case 'male':
       $profession = "Engineer";
       break;
      case 'female':
       $profession = "Doctor";
       break;
      default:
       $profession = "Teacher";
       break;
     }
     return $profession;
    }
}
$manClass = new ManClass();
$manName = $manClass->getName();
$manAge = $manClass->age();
$manProfession = $manClass->profession("male");
echo "{$manName} is a {$manAge} years old & an {$manProfession}</br>";

// echo "<br>"
$womanClass = new WomanClass();
$womanName = $womanClass->getName();
$womanAge = $womanClass->age();
$womanProfession = $womanClass->profession("female");
echo "{$womanName} is a {$womanAge} years old & an {$womanProfession}";


?>






