<?php

if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";



     $file_name = $_FILES['image']['name'] . "<br>"; 
     $file_size = $_FILES['image']['size'] . "<br>";
     $file_type = $_FILES['image']['type'];
     $tmp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_name,"upload_img/". $file_name);


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"/> <br> <br>
        <input type="submit" />
    </form>
</body>
</html>


