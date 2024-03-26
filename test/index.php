<?php

// $n1 = 10;
// $n3 = "2";
// $sum = $n1 %  $n3;
// echo $sum ."\n";

// $a = "hello";
// $b =array("a","b","c","d");
// $c = 5;
// $d = null;
// $e = 2.00;
// echo is_array($a) . "\n";
// echo is_bool($c). "\n";
// echo is_integer($c)."\n";
// echo is_null($d) ."\n";
// echo is_numeric($e) ."\n";

#Variable Declaration 
    # $color
    # $operation_stytem
    # $_some_varibale
    # $model

#Assiging variables by Reference
// $name = "Hello";
// echo $name ."\n";
// $name2 = $name;
// echo $name2 ."\n";
// $name3 = "Good";
// $name = & $name3;
// echo $name3;



#Superglobal variables
// foreach($_SERVER as $var => $value){
//     echo "$var=> $value \n";
//     echo "$var=> $value <br/>";
// }

// print_r( $_SERVER['HTTP_SEC_CH_UA_PLATFORM']);
// print_r($_SERVER['HTTP_REFERER']);
// print_r($_SERVER['REQUEST_URI']);




#$_GET
#$_POST




#Defining a constant
// const pi = 3.1416;
// $p1 = pi * 2;
// echo $p1;


#Taking  Action With Expressions
// $a = 5;
// $a ="5";
// $sum = 20 + $some_int;
// echo $sum;


#Opertor Precdence
// $value = 3 * 4 * 5 * 5 * 2;
// $value2 = ((((3*4)*5)*5)*2);
// echo $value ."\n";
// echo $value2 ."\n";


// $a = $b + $c * $d;
// $a = $b + ($c * $d);
// echo $a



# Assignment Operator
// $a + $b;
// $a +=5; #a equals $a push 5






// $numer = array(2,4,5,6,7,8,9,0,23,23,52,12,34,12);
// foreach ($numer as $num) {
//     echo $num ." , ";
// }
// $address = array();
// $address = array ("Rohoman","rohoman@gmail.com",233523423);

// foreach ($address as $add) {
//     vprintf("<p>Name: %s <br>Email: %s <br> phone: %s</p>", $add);
// }

// $x = 75;
// function myfunction() {
//   $x = $GLOBALS['x'];
//   echo $x ."\n";
// }

// myfunction()


#constuct
class Fruit {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name; 
      $this->color = $color; 
    }
    function get_name($nam) {
    // echo $name; 
    // $this->$name;
      return $this->$nam;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruit("Apple", "red");
  echo $apple->get_name("Banana");
  $hoo = $apple;
  echo $hoo;
  echo "<br>";
  echo $apple->get_color();

//   echo $apple->get_name() . "\n";

#destruct
#call
#callStatic
#get
#set
#isset
#unset
#sleep
#wakeup
#toStatic
#invoke
#set_state
#clone
#debugInfo
?>