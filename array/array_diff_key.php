
<?php
#দুটি অ্যারের কী তুলনা করুন এবং পার্থক্যগুলি ফেরত দিন:

#Parameter	Description
##array1    প্রয়োজনীয়। যে অ্যারে থেকে তুলনা করতে হবে
##array2    আবশ্যক। তুলনা করার জন্য একটি অ্যারে
##array3..  ঐচ্ছিক। তুলনা করার জন্য আরও অ্যারে


$a1=array("a"=>"red","b"=>"green","j"=>"cats","c"=>"blue","d"=>"yellow" ,"f"=>"black");
$a2=array("e"=>"red","k"=>"black","g"=>"purple","h"=>"yellow");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow","l"=>"Rasel");
$a4=array("a"=>"red","b"=>"green","h"=>"blue");


$result2=array_diff_key($a1,$a2,$a3,$a4);
print_r($result2);


// Output  Array ( [j] => cats [c] => blue [d] => yellow [f] => black )

?>