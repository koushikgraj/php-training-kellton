<!DOCTYPE html>
<html>
<body>

<?php
class Bike {
  // Properties
  public $cc;
  public $color;

  // Methods
  function set_cc($cc) {
    $this->cc = $cc;
  }
  function get_cc() {
    return $this->cc;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}
function stop(){
  echo "stopvechile";
}
function start(){
  echo "startvechile";
}
function ride(){
  echo "ride vechile";
}
$cc = new Bike();
$cc->set_cc('125');
$cc->set_color('Red');
echo "cc: " . $cc->get_cc();
echo "<br>";
echo "Color: " .  $cc->get_color();
$stop=stop;
$start=start;

?>
 
</body>
</html>
