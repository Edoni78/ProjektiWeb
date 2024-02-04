<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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
    <link rel="stylesheet" href="./CSS/productSub.css">
    <style>

        .nav-auth{
            align-items: center;
        }
        .hrOfUser{
            font:max(15px,1vw) "rRegular";
        }
        .mngPrd-btn{
            width: max(150px,10vw) !important;
            height: max(35px,2.5vw);
            background-color: #718FDD;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }
        .mngPrd-btn a{
            font: max(13px,0.6vw);
            color: #ffffff;
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
            <a href="adminHowitworks.php">How it Works</a>
            <a href="#">Products</a>
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
    <div class="productsSub">
        <div class="productSubHeader">
            <h1>Products</h1>
            <div class="productsLine"></div>
        </div>

       <div class="mngPrd-btn">
            <a href="manageProducts.php" class="manage-products-btn">Manage Products</a>
       </div>

        <div class="productSubCards">
    <?php
    include_once 'productRepository.php';

    $productRepo = new ProductRepository();
    $products = $productRepo->getAllProducts();

    foreach ($products as $product) {
        echo '<div class="productSubCard">';
        echo '<form method="post" action="add_to_cart.php">';
        echo '<input type="hidden" name="productId" value="' . $product['id'] . '">';

        echo '<div class="productSubCard-up">';
        echo '<div class="productImage" style="background-image: url(' . $product['image_url'] . ');"></div>';
        echo '</div>';

        echo '<div class="productSubCard-down">';
        echo '<div class="cardTitleS">';
        echo '<p>' . $product['name'] . '</p>';
        echo '</div>';

        echo '<div class="cardDescription">';
        echo '<p>' . $product['description'] . '</p>';
        echo '</div>';

        echo '<div class="cardPrice">';
        echo '<p>' . $product['price'] . '$</p>';

        echo '<div class="addToCart">';
        echo '<p class="plus">+</p>
        <i class="fa-solid fa-cart-shopping"></i>';
        echo '</div>';

        echo '</div>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
    }
    ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer">
        <div class="footerUp">
            <div class="footerLogo"></div>
            <div class="socials">
                <p class="contact">Contact Us :</p>
                <div class="socialMedia">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                    <i class="fa-brands fa-discord"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
              
            </div>
        </div>
    
        <div class="footer-links">
            <div class="footerLink">
                <p class="footerLink-title">What is Metaverse?</p>
                <a href="">Virtual Reality (VR)</a>
                <a href="">Augmented Reality (AR)</a>
                <a href="">Digital World</a>
                <a href="">Community</a>
            </div>
    
            <div class="footerLink">
                <p class="footerLink-title">Blog</p>
                <a href="">Metaverse</a>
                <a href="">How it Works</a>
                <a href="">Latest News</a>
                <a href="">Our Blog</a>
            </div>
    
            <div class="footerLink">
                <p class="footerLink-title">About Us</p>
                <a href="">Products</a>
                <a href="">Who We Are</a>
                <a href="">Our Story</a>
                <a href="">The Metaverse Journey</a>
            </div>
    
            <div class="footerLink">
                <p class="footerLink-title">Support</p>
                <a href="">Get Help</a>
                <a href="">Customer Support</a>
                <a href="">Assistance Center</a>
                <a href="">Reach Out to Our Support Team</a>
            </div>
    
            <div class="footerLink">
                <p class="footerLink-title">Get In touch</p>
                <a href="">Get in Touch with Us</a>
                <a href="">Contact Us</a>
                <a href="">Reach Out to Us</a>
                <a href="">How to Contact Us</a>
            </div>
        </div>
    </div>
</body>
</html>
