<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}


try {
    echo divide(4, 0);
  } catch(Exception $e) {
    echo "Unable to divide.<br>";
  }
try {
    echo divide(4, 2);
} catch(Exception $e) {
    echo "Unable to divide.";
}  
finally{
    echo "<br> it always executed";
}
?>