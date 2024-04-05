<?php
$db=new mysqli("localhost","root","","test");

if(isset($_POST["btn"])){

  $name=$_POST["name"];
  $password=$_POST["password"];
  //echo $name,":",$password;

  $result=$db->query("select * from core_users where name='$name' and password='$password'");
  $user=$result->fetch_object();

  if(isset($user->name)){
    echo "Success";
    //header("location:select.php");
  }else{
    echo "Incorrect Username or Password";
  }

}

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