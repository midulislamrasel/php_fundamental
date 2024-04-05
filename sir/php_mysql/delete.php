<?php
  require_once("db_config.php");

  if(isset($_GET["id"])){
    $id=$_GET["id"];
    
    $db->query("delete from core_users where id='$id'");
    header("location:select.php");

  }else{
    echo "no id found";
  }

?>