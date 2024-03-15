<?php

// class personal2{
//     public $name ,$age;
//     public function show(){
//         echo $this->name . "<br>";
//         echo $this->age;
//     }
// }

// $newPerson = new personal2();
// $newPerson->name = "Midul";
// $newPerson->age = "23";
// $newPerson->show()


class f0088{

    public static function show(){
        echo "hellow world";
    }
    public function __construct(){
        self::show();
    }
}
// f0088::$name;
// f0088::show()

new f0088;

?>