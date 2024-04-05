<?php
$array = array('fox','bear',12.5,'deer',45,'cat','dog','elephant','wolf');

if(in_array("12.5",$array)){
    echo "Yes This true"; //OUTPUT
}else{
    echo "This is NOT true";
}



if(in_array("12.5",$array, true)){
    echo "Yes This true";
}else{
    echo "This is NOT true"; //Output
}

?>