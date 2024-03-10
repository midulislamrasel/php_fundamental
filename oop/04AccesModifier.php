<?php

class base{
    public $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your Name is : " . $this->name ."<br>";
    }
}

$fname = new base("Midul");
// $fname-> name = "Midul Islma"; // first over_right
$fname-> show()



 

?>