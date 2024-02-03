<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a23437b52f.js" crossorigin="anonymous"></script>
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
    <link rel="stylesheet" href="./CSS/howitworksSub.css">
</head>
<style>
        .nav-auth{
            align-items: center;
        }
        .hrOfUser{
            font:max(15px,1vw) "rRegular";
        }
    </style>
<body>
    <div class="navbar">
        <div class="logoHolder">
            <a class="logo" href="index.php"></a>
        </div>

        <div class="nav-links">
            <a href="userHome.php">Home</a>
            <a href="#">How it Works</a>
            <a href="userProducts.php">Products</a>
            <a href="userAboutUs.php">About Us</a>
            <a href="userSuportUs.php">Support Us</a>
        </div>

        <div class="nav-auth">
            <h3 class="hrOfUser"><?php echo "Username: ".$_SESSION['name']."<br>" ?></h3>
            <a class="register <?php echo $hide?>" href="logout.php">Log out</a>
        </div>


        <div  class="hamburger-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

    </div>

    <div class="howitWorksSub">
        <div class="howitworks-sub-conatiner">
            <h1>Embark on this extraordinary adventure into the Metaverse – where imagination knows no limits, and the future is now. Join us as we shape the next frontier of digital exploration and community building!</h1>
            <a href="products.html">Click here <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</body>
</html>