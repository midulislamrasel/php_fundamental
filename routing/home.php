<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header{
            color:red;
        }
    </style>
</head>
<body>    
    <nav>
      <a href="home.php">Home</a> |
      <a href="home.php?views=product">Product</a> |
      <a href="home.php?views=contact">Contact</a> |
      <a href="home.php?views=about">About</a>
    </nav>    
    <?php
        include("placeholder.php");
    ?>
</body>
</html>