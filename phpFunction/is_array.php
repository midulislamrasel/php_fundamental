<?php
$array = array('fox','bear','deer','cat','dog','elephant','wolf');
$noarray = 10;


if(is_array($noarray)){
    for($i=0; $i<count($array); $i++){
        echo $array[$i] . "<br>";
    }
}else{
    echo "Cannot loop through the variable , not aan array";
    //OUTPUT 
}

if(is_array($array)){
    for($i=0; $i<count($array); $i++){
        echo $array[$i] . "<br>";
    // OUTPUT 
    }
}else{
    echo "Cannot loop through the variable , not aan array";
}


?>