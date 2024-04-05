<?php
require_once("db_config.php");
if(isset($_GET["id"])){
    $id=$_GET["id"];    
    $result=$db->query("select * from core_users where id='$id'");     
    $row=$result->fetch_object();
}

if(isset($_POST["btn"])){

    $id=$_POST["id"];
    $fullname=$_POST["full_name"];
    $name=$_POST["name"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $role=$_POST["role"];
    $ip=$_SERVER["REMOTE_ADDR"];

    $db->query("update core_users set name='$name',email='$email',full_name='$fullname',password='$password',mobile='$mobile',role_id='$role',ip='$ip' where id='$id'");
    echo "Successfully Updated";

}

?>
<a href="select.php">Back</a>
<form action="#" method="post">
  <input type="hidden" name="id" value="<?php echo isset($row->id)?$row->id:""?>" />
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
    <input type="text" name="full_name" value="<?php echo isset($row->full_name)?$row->full_name:""?>" />
</div>
<div>
    Name<br>
    <input type="text" name="name" value="<?php echo isset($row->name)?$row->name:""?>" />
</div>
<div>
    Password<br>
    <input type="password" name="password" value="<?php echo isset($row->password)?$row->password:""?>" />
</div>
<div>
    Email<br>
    <input type="text" name="email" value="<?php echo isset($row->email)?$row->email:""?>" />
</div>
<div>
    Mobile<br>
    <input type="text" name="mobile" value="<?php echo isset($row->mobile)?$row->mobile:""?>" />
</div>
<div>   
    <input type="submit" name="btn" value="Update" />
</div>
</form>
