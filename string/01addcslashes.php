<?php

#Add backslashes to certain characters in a string:


$str = addcslashes("HelloWorldManeWorldMahamood", "Mm");
$str = "Welcome to my humble Homepage!";
    echo $str."<br>";
    echo addcslashes($str,'m')."<br>";
    echo addcslashes($str,'H')."<br>";
echo $str;






?>