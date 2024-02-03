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
    <style>

        .nav-auth{
            align-items: center;
        }
        .hrOfUser{
            font:max(15px,1vw) "rRegular";
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logoHolder">
            <a class="logo" href="index.php"></a>
        </div>

        <div class="nav-links">
            <a href="adminHome.php">Home</a>
            <a href="#">How it Works</a>
            <a href="adminProducts.php">Products</a>
            <a href="adminAboutUs.php">About Us</a>
            <a href="adminSuportUs.php">Support Us</a>
            <a href="dashboard.php">Dashboard</a>
        </div>

        <div class="nav-auth">
            <h3 class="hrOfUser"><?php echo " Admin: ".$_SESSION['name']."<br>" ?></h3>
            <a class="register"  href="logout.php">Log out</a>
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
            <a href="adminProducts.php">Click here <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</body>
</html>