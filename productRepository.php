<?php
include_once 'databaseconnection.php';

class ProductRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }

    function getAllProducts() {
        $conn = $this->connection;

        $sql = "SELECT * FROM products"; // Adjust table name accordingly

        $statement = $conn->query($sql);
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }

    function getProductById($Id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM products WHERE id = '$Id'"; // Adjust column names accordingly

        $statement = $conn->prepare($sql);
        $statement->execute([$Id]);
        $product = $statement->fetch(PDO::FETCH_ASSOC);

        return $product;
    }
    // Add more functions as needed
}
?>