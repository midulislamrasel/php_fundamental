<?php
#Get column of last names from a recordset:

$a = [
    [
        "id"=>5963,
        "FIsrt Name"=> "Peter",
        "Last Name" => "Grifin",
        "age"=>23
    ],
    [
        "id"=>2324,
        "FIsrt Name" =>"Ben",
        "Last Name" => "Sith",
        "age"=>23
    ],
    [
        "id"=>754,
        "FIsrt Name" =>"Samiul",
        "Last Name" => "Hokh",
        "age"=>23
    ]
];

print_r(array_column($a ,"FIsrt Name" ,"id"  ))






?>