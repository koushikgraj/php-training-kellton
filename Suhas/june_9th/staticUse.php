
<?php
/* Use static function as a counter */
  
class solution {
      
    static $count;
      
    public static function getCount() {
        
        for ($count=0;$count<=10;$count++)
        {
            echo "tik tik ".$count;
            echo "<br>";
        }
        
        //return self::$count++;
    }
}
  
solution::getCount();
?>
