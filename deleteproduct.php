<?php

$productId = $_GET['id'];
include_once 'productRepository.php';



$productRepository = new ProductRepository();

$productRepository->deleteProduct($productId);

header("location:manageProducts.php");


?>