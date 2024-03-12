<?php

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r( $cars );
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
print_r( $cars );
echo "<br>";
$age = array("Aeter"=>"65", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_r( $age );
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"87", "Joe"=>"43");
ksort($age);
print_r( $age );
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
print_r( $age );
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
print_r( $cars )



?>