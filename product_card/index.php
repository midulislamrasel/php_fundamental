<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_crud";

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $statement = $conn->prepare('SELECT * FROM products ORDER BY create_date DESC');
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);


    // echo '<pre>';
    // var_dump($products);
    // echo '<pre>';

    
} catch (PDOException $e) {
    // Display errors if any
    echo "Connection failed: " . $e->getMessage();
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            padding:60px;
        }
    </style>
</head>
<body>
        <h1>Products CRUD</h1>
        <a href="create.php" class="btn btn-success py-2">Create Product</a>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Images</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Create Date</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $i =>  $product): ?>
                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td></td>
                    <td><?php echo $product["title"] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['create_date'] ?></td>
                    <td>
                    <a href="update.php? id=<?php echo $product['id'] ?>" class="btn btn-sm btn-outline-primary">Edite</a>
                   
                    <form style="display:inline-block" method="post" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                        <button  type="submit" class="btn btn-sm btn-outline-Danger">Delete</button>
                    </form>

                </td>
                </tr>
               <?php endforeach ?>
            </tbody>
        </table>
</body>
</html>