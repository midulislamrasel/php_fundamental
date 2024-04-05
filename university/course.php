<?php
  require_once("db_config.php");

  if(isset($_POST["btn"])){
    echo "this page is working";
    
    $id=$_POST["id"];
    $name=$_POST["name"];
    $age=$_POST["age"];
    $phone=$_POST["phone"];
    $city=$_POST["city"];
  
    $db->query("insert into test(id,name,age,phone,city) values('$id','$name','$age','$phone','$city')");
    echo "Successfully created";

  }
 
?>
<form action="#" method="post">
    id: <br>
    <input type="number" name="id"> <br>
    Name: <br>
    <input type="text" name="name"> <br>
    age: <br>
    <input type="text" name="age"><br>
    phone: <br>
    <input type="text" name="phone"><br>
    city: <br>
    <input type="text" name="city"><br>
  
    <br>
    <input type="submit" name="btn" value="Create" /><br>

</form>