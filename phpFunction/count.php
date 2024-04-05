<?php
//Count-> count all elements is an array, or somethin in an object
// int count(mixed $array_or_countable [,int $mode = COUT_NORMAL])


$array = array('fox','bear','deer','cat','dog','elephant','wolf');
echo  "Count length ".count($array) . "<br>";
    //Output 7
for($i=0; $i<count($array); $i++){
    echo $array[$i] . "<br>";
    //Output 'fox','bear','deer','cat','dog','elephant','wolf'
}

//COUNT_RECURSIVE 
$array = array('fox','bear','deer','cat','dog','elephant','wolf',
            array('red','yellow','pink')
        );

echo "Count length " . count($array, COUNT_RECURSIVE) . "<br>";
        // output 9
foreach($array as $element) {
    if (is_array($element)) {
        foreach($element as $sub_element) {
            echo $sub_element . "<br>"; 
            // output 'red','yellow','pink'
        }
    } else {
        echo $element . "<br>";
         // output  'fox','bear','deer','cat','dog','elephant','wolf' ,'red','yellow','pink'
    }
}

?>