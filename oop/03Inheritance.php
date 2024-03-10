<?php

class Person {
    public $name, $age, $salary;

    function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function show() {
        echo "My Name Is : ". $this->name . "<br>";
        echo "My age Is : " . $this->age . "<br>";
        echo "My Salary is : " . $this->salary . "<br>";
    }

}

class Person2 extends Person {
    public $company, $position; // Corrected variable names

    function __construct($name, $age, $salary, $company, $position) {
        parent::__construct($name, $age, $salary); // Call parent constructor
        $this->company = $company;
        $this->position = $position;
    }
    
    function show2() {
        parent::show();
        echo "My Company Name : " . $this->company . "<br>"; // Corrected spelling
        echo "My Position : " . $this->position . "<br>"; // Corrected variable name
    }
}


$showName_Age_Salary = new Person2("Midul", 22, 35000,"ABC","Manager");

$showName_Age_Salary->show2();

?> 
