<?php 

abstract class A{
    public $name;
   abstract protected function calc3($a , $b);
}

class B extends A{
    public function calc3( $c , $d){
        echo $c + $d;
    }
}

$test = new B();
$test->calc3(10 ,23)



?>