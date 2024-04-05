<?php session_start();
 
 if(!isset($_SESSION["name"])){ 
    echo "Go to login page";
    die();
 }

 echo $_SESSION["name"];
 echo "<br>";
 echo $_SESSION["role"];

?>