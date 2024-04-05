<?php
$array = array('fox','bear','deer','cat','dog','elephant','wolf');

$text = "I love in Bangladesh";

$extract = substr($text,0);
echo $extract . "<br>";
// output I love in Bangladesh

$extract2 = substr($text,0,6);
echo $extract2."<br>";
// output I love

$extract2 = substr($text,-10);
echo $extract2."<br>";
// output Bangladesh
?>