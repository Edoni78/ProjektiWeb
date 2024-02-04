<?php
include_once 'productsdbconnection.php';
include_once 'product.php';

class ProductRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }

    function insertProduct($product) {
        $conn = $this->connection;

        $id = $product->getId();
        $name = $product->getName();
        $description = $product->getDescription();
        $price = $product->getPrice();
        $image_url = $product->getImage_url();

        $sql = "INSERT INTO products (id, name, description, price, image_url) VALUES (?, ?, ?, ?, ?)";

        try {
            $statement = $conn->prepare($sql);
            $statement->execute([$id, $name, $description, $price, $image_url]);
            echo "<script> alert('The product has been registered successfully!'); </script>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function getAllProducts() {
        $conn = $this->connection;

        $sql = "SELECT * FROM  products"; 

        $statement = $conn->query($sql);
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }

    function getProductById($id) {
        $conn = $this->connection;
    
        $sql = "SELECT * FROM products WHERE id = ?"; 
    
        $statement = $conn->prepare($sql);
        $statement->execute([$id]); 
    
        $product = $statement->fetch(PDO::FETCH_ASSOC);
    
        return $product;
    }
    
    function updateProduct($id, $name, $description, $price, $image_url){
        $conn = $this->connection;
    
        $sql = "UPDATE products SET name=?, description=?, price=?, image_url=? WHERE id=?";
    
        $statement = $conn->prepare($sql);
    
        $statement->execute([$name, $description, $price, $image_url, $id]);
    
        echo "<script>alert('Update successfuly'); </script>";
    }
    

   function deleteProduct($id){
    $conn = $this->connection;

    $sql = "DELETE FROM products WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('Deleted successfuly'); </script>";
} 
}
?>