<?php
include_once 'productRepository.php';
include_once 'product.php';

if(isset($_POST['addBtn'])){
    if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) ||
    empty($_POST['image_url'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image_url = $_POST['image_url'];
        $id = uniqid();


        $product  = new Product($id,$name,$description,$price,$image_url);
        $productRepository = new ProductRepository();

        $productRepository->insertProduct($product);


    }
}



?>