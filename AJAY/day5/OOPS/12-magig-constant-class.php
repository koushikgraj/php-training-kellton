<?php   
    namespace Technical_Portal;  
    echo "<h3>Example for CLASSNAME::CLASS </h3>";  
    class javatpoint { 
		function __construct()
		{
			echo __CLASS__;
		}
		
		public function thisIsMethod(){
			
		}
	
    }  
    echo javatpoint::class;    //ClassName::class   
	echo "<br><br>";
	$class = new javatpoint();
	
function thisIsFunction(){
	
}
?>  