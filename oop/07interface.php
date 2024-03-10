<?php

interface parent1{
    function calc($a ,$b);
}

interface parent2{
    function sub($c, $d);
}

class childClass implements parent1, parent2{
    public function calc($e , $f){
        echo "NUM 01>" . $e + $f . "<br>";
    }
    public function sub ($g , $h){
        echo "NUM 02> ". $g * $h;
    }
}

$test = new childClass();
$test->calc(6,5);
$test-> sub(2,4)








?>