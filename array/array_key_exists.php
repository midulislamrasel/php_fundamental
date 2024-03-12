<?php
$a=array("A"=>"XC90","B"=>"X5","C"=>"Xe50", "D"=>"Xc80");
if (array_key_exists("a",$a)){
  echo "Key exists!";
  }else{
  echo "Key does not exist!";
  }

echo "<br>";

$b = ["A","B","C","D","E","F"];
if(array_key_exists(0,$b)){
    echo "Key Exists";
}else{
    echo "key does not exist";
}
echo "<br>";



$d = ["A","B","C","D","E","F"];
array_key_exists(7,$d);
echo "YES"

?>