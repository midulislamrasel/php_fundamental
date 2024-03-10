<?php

#The array_fill() function fills an array with values.


#index	Required. The first index of the returned array
#number	Required. Specifies the number of elements to insert
#value	Required. Specifies the value to use for filling the array

    $a1=array_fill(3, 5,"blue");
    print_r($a1);
    echo "<br>";

    $b1=array_fill(0,5,"red");
    print_r($b1);



    // output :
    // Array ( [3] => blue [4] => blue [5] => blue [6] => blue [7] => blue )
    // Array ( [0] => red [1] => red [2] => red [3] => red [4] => red )
?>