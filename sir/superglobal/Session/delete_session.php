<?php session_start();

unset($_SESSION["name"]);
unset($_SESSION["role"]);

session_destroy();

?>