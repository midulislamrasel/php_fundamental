<?php

 trait test{
    public function hello(){
        echo "Say Hello" . "<br>";
    }
 }

 trait test2{
    public function bye(){
        echo "Say Bye" . "<br>";
    }
    public function bye2(){
        echo "Say Bye2" . "<br>";
    }
 }

class A{
    use test , test2;
}

class B{
    use test;
}


$obj = new A();
$obj->hello();
$obj->bye();
$obj->bye2();
$obj2 = new B();
$obj2->hello()


?>