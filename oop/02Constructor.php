<?php 
//Construcsto auto call 

class person{
    public $name , $age;

    function __construct($name , $age){ //Construct call __
        $this->name = $name;
        $this->age  = $age;   
    }

    function show(){

        // Print
        echo $this->name . " - " . $this->age . "<br>";
        // echo "Your Name is : " . $this->name . "<br>";
        // echo "My age is " . $this->age;
    }
}

$myName = new person("Midul Islma Rasel", 23);
$myName2 = new person("Rasel" , 24);
$myName3 = new person("Mahodi", "07");
// $myName->name = "Midul Islam";
// $myName->age ="24";
$myName-> show();
$myName2->show();
$myName3->show();

?>