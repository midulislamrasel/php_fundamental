<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
     
        include 'connect.php';
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql="insert into `registration`(username,password)values('$username', '$password')";
        $result=mysqli_query($db_cont , $sql);

        if($result){
            echo "Yes Data inserted";
        }else{
            die(mysqli_error($db_cont));
        }
        
    }



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <form accept="sing.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="username" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" >
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>  



     </body>
</html>