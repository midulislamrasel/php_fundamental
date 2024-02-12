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

    // Check if form is submitted
    echo $_SERVER['REQUEST_METHOD'].'<br>';

    // Errors from
    $errors = [];
    $title = '';
    $price = '';
     

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $date = date('Y-m-d H:i:s');

        // Validate form inputs
        if (!$title) {
            $errors[] = "Product title is required";
        }

        if (!$price) {
            $errors[] = "Price is required";
        }

        // Proceed with database insertion if there are no errors
        if (empty($errors)) {
            $statement = $conn->prepare("INSERT INTO products (title, image, description, price, create_date)
                            VALUES (:title, :image, :description, :price, :date)");

            // Bind parameters
            $statement->bindValue(':title', $title);
            $statement->bindValue(':image', ''); // This should be handled if you are uploading images
            $statement->bindValue(':description', $description);
            $statement->bindValue(':price', $price);
            $statement->bindValue(':date', $date);
            $statement->execute();
        }
    }

} catch (PDOException $e) {
    // Display errors if any
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create Product</title>
    <style>
        body{
            padding:60px;
        }
    </style>
</head>
<body>
    <h1>Create Product</h1>
    <!-- Errors -->
    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach($errors as $error) : ?>
                <div>
                    <?php echo $error ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <!-- Form -->
    <a href="create.php" class="btn btn-success py-2">Create Product</a>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <div class="form-group">    
            <label>Product Image</label>
            <br>
            <input type="file" name="Images"> 
        </div>
        <div class="form-group">
            <label>Product Title</label>
            <input type="text" name="title" value="<?php echo $title ?>" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="number" name="price" value="<?php echo $price ?>" step="0.01" class="form-control" placeholder="Enter price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
