

<?php

class base1{
    public $name ;

    function cale1($a, $b){
        return $a + $b;
    }

    function shwo1($n){
        echo $n;
    }
}

class derived1 extends base1{
    public $name ;

    function cale1($a, $b){
        return $a * $b;
    }
    function shwo1($n){
        echo $n;
    }
}

$test = new base1();
$c = $test->name = "Google";
$test2 = new derived1();
$d = $test->name = "Yeaho";
$test->shwo1($d);



?>
