<?php 

#দুটি অ্যারের মান তুলনা করুন, এবং পার্থক্য ফেরত দিন:
#Compare the values of two arrays, and return the differences:


#Parameter	Description
##array1    প্রয়োজনীয়। যে অ্যারে থেকে তুলনা করতে হবে
##array2    আবশ্যক। তুলনা করার জন্য একটি অ্যারে
##array3..  ঐচ্ছিক। তুলনা করার জন্য আরও অ্যারে


    $a1=array("a"=>"red","b"=>"green","l"=>"cats","c"=>"blue","d"=>"yellow" ,"f"=>"black");
    $a2=array("e"=>"red","k"=>"black","g"=>"purple","h"=>"yellow");
    $a3=array("a"=>"red","b"=>"black","h"=>"yellow","l"=>"Rasel");
    $a4=array("a"=>"red","b"=>"green","h"=>"blue");

    $result=array_diff($a1,$a2,$a3,$a4);
    print_r($result );
?>