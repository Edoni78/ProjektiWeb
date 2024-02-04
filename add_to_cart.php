<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["productId"])) {
        $productId = $_POST["productId"];

     

        $conn = new PDO("mysql:host=localhost;dbname=your_database_name", "your_username", "your_password");

        $productId = htmlspecialchars(strip_tags($productId));

        $sql = "INSERT INTO cart (product_id) VALUES (:productId)";
        $statement = $conn->prepare($sql);
        $statement->bindParam(":productId", $productId, PDO::PARAM_INT);
        
        if ($statement->execute()) {
            echo "Product added to cart successfully!";
        } else {
            echo "Error adding product to cart.";
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Invalid request method.";
}
?>