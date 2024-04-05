<?php

//Primitive Data
//-------------------

echo "Text";//string
echo 34;//number
echo true;//boolean
echo null; //null

//Compound Data: Array
print_r([3,4,5]);//numerical array
print_r(["a"=>"apple","b"=>"bag"]);//associative array

//Compound Data: Object
class Person{
    public $name;
    public $age;
    public $mobile;
}

$o=new Person();
$o->name="Jahid";
$o->age=32;
$o->mobile="43434355";
print_r($o) ;//Object

$o2=new Person();
$o2->name="Rasel";
$o2->age=31;
$o2->mobile="33434355";
print_r($o2) ;//Object

//Constant
define('PI',3.14);
echo PI;//constant



?>