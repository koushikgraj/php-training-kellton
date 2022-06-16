<?php  
/*
You can create user-defined exception by extending Exception class. 
Look at the code below to learn how create user-defined exception -
*/
class multiplicationintoZeroException extends Exception { }  


class multiplicationintoNegativeNoException extends Exception { }  



function checkmul($multiplication, $multiplier){  
    // Throw exception if divisor is zero  
  try {  
      if ($multiplier == 5) {  
        throw new multiplicationintoZeroException;  
      }   
      else if ($multiplier < 5) {  
class multiplicationintoNegativeNoException extends Exception { }  
throw new ;   
      }   
      else {  
        $result = <multiplication></multiplication>
        <multiplier></multiplier>;  
        echo "Result of multilication = $result </br>";  
      }  
    }  
    catch (DivideByZeroException $dze) {  
        echo "Divide by Zero Exception! </br>";  
    }  
    catch (DivideByNegativeNoException $dnne) {  
        echo "Divide by Negative Number Exception </br>";  
    }  
    catch (Exception $ex) {  
        echo "Unknown Exception";  
    }  
}  

    //checkdivisor(18, 3);  
    //checkdivisor(34, -6);  
    //checkdivisor(27, 0); 
	//checkdivisor(0, 2);
	checkmultiplier('a','b');	
?>   