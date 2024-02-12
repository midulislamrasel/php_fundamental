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
} catch (PDOException $e) {
    // Display errors if any
    echo "Connection failed: " . $e->getMessage();
}

$id = $_POST['id'] ?? null;

if(!$id){
    header('Location: index.php');
    exit;
}

$statement =  $conn->prepare('DELETE FROM products WHERE id=:id');
$statement->bindValue(':id', $id);
$statement->execute();

header("Location: index.php");
exit;
?>
