<?php

function sum(int $value){
    echo $value + 10 . "<br>";
}

sum(10);
// sum("Hey")




class hello{
    public function sayhello(){
        echo "Hello Everyon";
    }
}
class bye{
    public function saybye(){
        echo "Bye EverYoun";
    }
}
function wow( $c){
    $c->sayhello();
}

$test = new hello();
wow($test);



// ================
class school {
    public function getNames($names){
        foreach($names->Names() as $name){
            echo $name . "<br>";
        }
    }
}

class student {
    public function Names(){
        return ["Alamin","Rohim","Kamal","Sajidul"];
    }
}

class libray{

}
$lib = new libray();

$stu = new student();
$scl = new school();

$scl->getNames($stu); // Corrected variable name and added a semicolon at the end








?>