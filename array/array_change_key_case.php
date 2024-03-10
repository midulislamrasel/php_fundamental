<?php 
###Changes all keys in an array to lowercase or uppercase

// $input_array = array( "First"=> 1, "SenOnd"=>2);
$input_array = ["First"=>1, "SenOne"=>2, "Trd"=>3];
print_r(array_change_key_case($input_array ,CASE_UPPER))


?>