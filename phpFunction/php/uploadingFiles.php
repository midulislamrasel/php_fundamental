<?php


if(isset($_FILES['files'])){
    move_uploaded_file($_FILES['files'] ."php/" . $_FILES['file']['name']);
    echo "sucessfull uploade";
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

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" > <br> <br>
        <button>Submit</button>
    </form>


</body>
</html>