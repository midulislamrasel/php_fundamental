<?php 

$a = ['3'=>"B",'4'=>"E",'5'=>"D",'7'=>"K",'6'=>"L"];
echo array_search("B" ,$a );

echo "<br>";

$arr = array("MAC", "WINDOWS","LINUX", "SOLARIS");
$search = "LINUX";
echo array_search($search,$arr,false);
echo "<br>";

$array = array(45, 5, 1, 22, 22, 10, 10);
$value = "10";
echo array_search($value , $array )

?>