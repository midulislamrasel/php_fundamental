<?php
    // 1st 
    session_start();
    // print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       if(isset($_SESSION["favColor"])){
        echo "Favorit color : " .$_SESSION["favColor"];
       }
    ?>
</body>
</html>

