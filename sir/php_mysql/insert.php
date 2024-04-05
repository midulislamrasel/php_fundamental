<?php
  require_once("db_config.php");

  if(isset($_POST["btn"])){
     
    $fullname=$_POST["full_name"];
    $name=$_POST["name"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $role=$_POST["role"];
    $ip=$_SERVER["REMOTE_ADDR"];

    $db->query("insert into core_users(name,password,email,role_id,full_name,mobile,ip)values('$name','$password','$email','$role','$fullname','$mobile','$ip')");
    echo "Successfully created";

  }
 
?>
<a href="select.php">Back</a>
<form action="#" method="post">
 <div>
    Role<br>
    <select name="role">
         <option value="1">Admin</option>
         <option value="2">Manager</option>
         <option value="3">User</option>
   </select>
</div>
<div>
    Full Name<br>
    <input type="text" name="full_name" />
</div>
<div>
    Name<br>
    <input type="text" name="name" />
</div>
<div>
    Password<br>
    <input type="password" name="password" />
</div>
<div>
    Email<br>
    <input type="text" name="email" />
</div>
<div>
    Mobile<br>
    <input type="text" name="mobile" />
</div>
<div>   
    <input type="submit" name="btn" value="Create" />
</div>
</form>
