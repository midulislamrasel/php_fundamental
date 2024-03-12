<?php 

#The array_count_values() function counts all the values of an array.


##  Parameter	    Description
### array	        Required. Specifying the array to count values of


$arr= ["A","B","C","D","E","F"];
print_r(array_count_values($arr));

echo "<br>";


$a=array("A","B" ,"Cat","Dog","A","Cat", "Dog","Dog","Dog");
print_r(array_count_values($a));




?>