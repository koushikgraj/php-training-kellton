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
$Bike = new Bike();
$Bike->set_cc('150');
$Bike->set_color('Red');
echo "cc: " . $Bike->get_cc();
echo "<br>";
echo "Color: " . $Bike->get_color();

?>