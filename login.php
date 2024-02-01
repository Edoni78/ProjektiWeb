<?php
session_start();
require_once 'databaseConnection.php';
require_once 'loginConfig.php'; // Assuming your class file is named loginConfig.php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];

    // Instantiate DatabaseConnection
    $dbConnection = new DatabaseConnection();
    $conn = $dbConnection->startConnection();

    // Instantiate loginConfig
    $loginConfig = new loginConfig($name, $surname, $password);

    // Fetch all users
    $users = $loginConfig->fetchAll($conn);

    // Check user credentials
    $authenticated = false;
foreach ($users as $user) {
    if ($user->getName() === $name && $user->getSurname() === $surname && password_verify($password, $user->getPassword())) {
        $authenticated = true;
        break;
    }
}


    // Handle authentication result
    if ($authenticated) {
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['role'] = $user['role']; // Assuming the role is retrieved in the fetchAll method
        if ($_SESSION['role'] == "admin") {
            header("location: adminHome.php");
            exit();
        } else {
            header("location: userHome.php");
            exit();
        }
    } else {
        echo "Incorrect Name, Surname, or Password!";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./CSS/navbar.css">
    <link rel="stylesheet" href="./CSS/banner.css">
    <link rel="stylesheet" href="./CSS/second-banner.css">
    <link rel="stylesheet" href="./CSS/paragraf-banner.css">
    <link rel="stylesheet" href="./CSS/flexbox.css">
    <link rel="stylesheet" href="./CSS/howitworks.css">
    <link rel="stylesheet" href="./CSS/blog.css">
    <link rel="stylesheet" href="./CSS/products.css">
    <link rel="stylesheet" href="./CSS/footer.css">
</head>
<body>
    <div class="navbar">
        <div class="logoHolder">
            <a class="logo" href="index.php"></a>
        </div>

        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="howitworks.php">How it Works</a>
            <a href="products.php">Products</a>
            <a href="aboutUs.php">About Us</a>
        </div>

        <div class="nav-auth">
            <a class="signIn" href="login.php">Log In</a>
            <a class="register" href="resgister.php"> Register</a>
        </div>


        <div  class="hamburger-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

    </div>

    <div class="container">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="login" onsubmit= "return validateForm()" >

                <div class="loginHeadinf">
                    <h1>LOGIN</h1>
                </div>
    
                <div class="inputName input">
                    <p for="">Name :</p>
                    <input type="text" id="name" required name="name">
                </div>
               
               <div class="inputSurname input">
                    <p for="">Surname :</p>
                    <input type="text" id="surname" name="surname">
               </div>
    
               <div class="inputPassword input">
                <p for="">Password:</p>
                <input type="password" id="password" name="password">
               </div>  
               <div class="buttonSubmit">
                <button name="loginbtn" onclick="validateForm()">Submit</button>
            </div>
    
        </form>
       

    </div>
       

    <script src="./JavaScript/loginValidate.js"></script>
</body>
</html>