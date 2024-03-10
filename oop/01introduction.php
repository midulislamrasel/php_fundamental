<?php

echo "Hello "  . "\n" ;

class calculation{
    public $a, $b, $c;

    function addison(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b; // Changed to proper subtraction logic
        return $this->c;
    }
}

//first Objeect 
$sum = new calculation();
$sum->a = 30;
$sum->b = 20;

//secend Object
$sub  = new calculation();
$sub->a = 50;
$sub->b = 40;


echo "sub value sub : " . $sub->sub() . " <br> ";
echo " sum value of : " . $sum->addison() . " <br>";  
echo "addison value in  sub ". $sub->addison();

?>
