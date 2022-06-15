<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>be a smartworker</h1>

<?php
    echo"hello world"."<br>";
    $text="sandeep";
    echo"$text.<br>";
    $color="orange";
    echo"my fav color is".$color."<br>";
    $x=10;
    $y=20;
    $z=$x+$y;
    echo "$z"."<br>";
    echo"i love $text box to read"."<br>";
    //$x=5;
    function mytest(){
        $x=5;
        echo"i got supply"."<br>";
    }
    mytest();
    $x=10;
    $y=20;
    function add(){
        global $x,$y;
    $z=$x+$y;
    }
    add();
    echo"$z"."<br>";
    function hello(){
        static $x=5;
        echo $x;
        $x++;
    }
    hello();
    echo"<br>";
    hello();
    echo"<br>";
    echo"<h1>brain tho hona code karne</h1>";
    echo"<br>";
    $x=32.96;
    var_dump($x);
    echo"<br>";
    $fruits=array("mango","banana","orange","apple","grapes");
    var_dump($fruits);
    echo"<br>";
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
      }
      
      $myCar = new Car("black", "Volvo");
      echo $myCar -> message();
      echo "<br>";
      $myCar = new Car("red", "Toyota");
      echo $myCar -> message();
      echo"<br>";
      $x="my name is sandeepkumar";
      echo strlen($x)."<br>";
      echo str_word_count($x)."<br>";
      echo strrev($x)."<br>";
      echo strpos($x,"s")."<br>";
      echo str_replace("sandeep","suman",$x)."<br>";
      $x=20;
      var_dump(is_int($x))."<br>";
      $x=20.09;
      $int_cast=(int)$x;
      echo $int_cast."<br>";
      echo (pi())."<br>";
      echo max(-2,5,6,2,9,1)."<br>";
      echo min(9,6,4,2,-1,6,7)."<br>";
      echo(abs(-6.7))."<br>";
      echo sqrt(64)."<br>";
      echo(round(6.5))."<br>";
      define("sandeep","suman");
      echo"sandeep"."<br>";
      define("cars",["volva","bmw","dokata"]);
      echo cars[1]."<br>";
      $x=10;
      if($x<50){
        echo"have a good day";
      }else{
        echo"have a good night";
      }
      echo"<br>";
      $fruit="mango";
      switch ($fruit) {
        case 'mango':
        echo"yes it is mango";
            break;
        
        default:
           echo "those are not fruits";
            break;
      }
      echo"<br>";
      $x=50;
      while($x<=100){
        echo $x."<br>";
        $x+=10;
    
      }
        for($i=0;$i<=10;$i++){
            if($i==4){ 
                break;
            }
            echo $i."<br>";

        }
        $fruit=array("mango"=>"2","apple"=>"3");
        foreach($fruit as $value=>$val){
            echo"$value=>$val";
            echo"<br>";
        }
        function writemessage($model){
            echo"$model";
        }
        writemessage("sandeep");
        echo"<br>";
        function addnumber(int $a,int $b){
            $z= $a+$b;
            return $z;
        }
        echo"5+10=". addnumber(5,10);
        echo"<br>";
        $car=array("volva","bmw");
        echo"i love to drive".$car[0]."after".$car[1];
        echo"<br>";
        $arrlength=count($car);
        for($x=0;$x<$arrlength;$x++){
            echo $car[$x];
            echo"<br>";
        }
        $car=array("volva","bmw");
        rsort($car);
        $arrlength=count($car);
        for($x=0;$x<$arrlength;$x++){
            echo $car[$x];
            echo"<br>";
        }

    


      

      

      
      
    
    ?>
    
    


</body>
</html>