<?php
//    foreach($_SERVER as $k=>$v){
//     echo "$k=$v <br>";
//    }  

//-------visitor count----------
$count=file_get_contents("counter.txt");
$count=$count!=null?$count:0;
$count++;
file_put_contents("counter.txt",$count);
echo "Total Visitor: ".file_get_contents("counter.txt");
//--------------

//---------IP Tracking------
date_default_timezone_set("Asia/Dhaka");

file_put_contents("ip.txt",$_SERVER["REMOTE_ADDR"]." | ".date("d-m-Y h:i a").PHP_EOL,FILE_APPEND);
echo "<pre>";
echo file_get_contents("ip.txt");
echo "</pre>";
//------------------
?>