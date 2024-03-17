<?php



echo "CookiePrint : " . $_COOKIE["user"] ;      

//cookie Delete 
setcookie("user"," ", time()-(86400 *30),"/")


?>