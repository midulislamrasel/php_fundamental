<?php

$a =  ["A"=>"Apple","B"=>"Bol","C"=>"Cat"];
print_r( array_keys($a));
echo "<br>";



$b =  ["A"=>"Apple","B"=>"Bol","C"=>"Cat"];
print_r( array_keys($b, "Bol"));
echo "<br>";




$user = [
	'username' => 'admin',
	'email' => 'admin@phptutorial.net',
	'is_active' => '1'
];
$properties = array_keys($user, "admin", true);
print_r($properties);



?>