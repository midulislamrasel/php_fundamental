<?php
##Create an array by using the elements from one "keys" array and one "values" array:


## Parameter	     Description
### keys Required.   Array of keys
### values	         Required. Array of values


$fname = ["Peter", "Ben", " Joe"];
$age = [23,45,42];


print_r(array_combine($fname ,$age))



?>