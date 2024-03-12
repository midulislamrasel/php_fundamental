<?php

$a = [
    $b =[
        "id" => "2323",
        "First Name"=>"Midul",
        "Last Name"=>"Islam"
    ],
    $c =[
        "id" => "323",
        "First Name"=>"Midul",
        "Last Name"=>"Choudhori"
    ],
    $d =[
        "id" => "7323",
        "First Name"=>"Midul",
        "Last Name"=>"Raddy"
    ],
    $e =[
        "id" => "9323",
        "First Name"=>"Midul",
        "Last Name"=>"Khan"
    ],
];

$lastName = array_column($a,"Last Name" ,"e");
print_r($lastName)

?>