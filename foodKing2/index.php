<?php require_once("navbar.php");?>
<?php

$nameError = "";
$passwordError = "";


if(isset($_POST["btn"])){
    $name = $_POST['name'];
    $password = $_POST["password"];
}


$db = new mysqli("localhost", "root", "", "foodking");

?>
<form action="#" method="post">
  <div>
    User<br>
    <input type="text" name="name" />
  </div>
  <div>
    Password<br>
    <input type="password" name="password" />
  </div>
  <div>   
    <input type="submit" name="btn" value="Login" />
  </div>
</form>
<a href="forget.php">Forget Password</a>
