<?php
    $a1=array("red","green");
    $a2=array("blue","yellow");

    print_r(array_merge($a1,$a2));
    echo "<br>";

    $my_array1 = array("size" => "bioiog", 2,3 );
    $my_array2 = array("a", "b", "size" => "ium","shape" => "circle", 4);
    $res = array_merge($my_array1, $my_array2);

print_r($res);
?>