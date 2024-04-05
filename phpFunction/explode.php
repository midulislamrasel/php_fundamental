<?php

$array = array('fox','bear','deer','cat','dog','elephant','wolf');
$text = "fox,orange,black,white,cyan,teal,purple,pink" ;
$coumns = "bob|nancy|rechel|molly|victoria";

$text_array = explode("|",$coumns);
print_r($text_array)
?>