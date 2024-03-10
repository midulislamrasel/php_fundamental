<?php 

#Compare the values of two arrays, and return the differences:


#Parameter	    Description
##array1	    Required. The array to compare from
##array2	    Required. An array to compare against
##array3,...	Optional. More arrays to compare against



    $a1=array("a"=>"red","b"=>"green", "l"=>"cat","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"black","g"=>"purple");
    $a3=array("a"=>"red","b"=>"black","h"=>"yellow");
    $a4=array("a"=>"red","b"=>"green","h"=>"blue");

    $result=array_diff($a1,$a2,$a3,$a4);
    print_r($result);
    



?>