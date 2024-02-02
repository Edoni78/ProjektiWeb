<?php
// session_start();

// if (!isset($_SESSION['name'])) {
//     header("location: login.php");
//     exit(); // Add exit to stop script execution after redirection
// }

// $hide = ($_SESSION['role'] == "user") ? "hide" : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetaVerse</title>
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
    <style>
        .nav-auth {
            align-items: center;
        }

        .hrOfUser {
            font: max(15px, 1vw) "rRegular";
        }
    </style>
</head>

<body>

    <!-- KTU FILLON NAVBARI-->
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
            <a class="register" href="resgister.php">Register</a>
        </div>

        <div class="hamburger-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- KTU PERFUNDON NAVBARI-->

    <!--BANNER FILLON KETU-->
    <div class="banner">
        <h1 class="title">What is Metaverse?</h1>
        <div class="image-container">
            <img id="slideshow" class="img" />
            <button onclick="changeImg()" class="buttonNext"><i class="fa-solid fa-arrow-right"></i></button>
        </div>

        <div class="typewriter-container">
            <!-- TYPING EFFECT PER PARAGRAFIN E PARE PERMES JAVASCRIPT -->
            <p class="typewriter-text" id="typewriter-text">
                <?php echo "The metaverse is the next evolution in social connection and the successor to the mobile internet."; ?>
            </p>
        </div>

        <!-- QA TKISH TASH ME SHTU E SHTON MRENA BANNERIT -->
    </div>
    <!--BANNER MBARON KETU-->

    <!-- HOW IT WORKS FILLON KETU -->
    <div class="howItWorks">
        <div class="howItWorks-heading">
            <h1>How it Works</h1>
        </div>
        <div class="howitworks-down">
            <div class="howItWorks-leftSide">
                <p><?php echo "We’re building for the future with privacy, safety, and inclusivity in mind"; ?></p>
            </div>

            <div class="howItWorks-rightSide">
                <div class="howItWorksImgHolder">
                    <div class="howItWorksImg"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOW IT WORKS MBARON KETU -->

    <!-- BLOG FILLON KETU -->
    <div class="blog">
        <div class="blogUp">
            <h1>Blog</h1>
        </div>

        <div class="blogDown">
            <div class="blog-leftside">
                <div class="blogImgHolder">
                    <div class="blogImg"></div>
                </div>
            </div>

            <div class="blog-rightside">
                <p>See how creators are making the metaverse a reality</p>
            </div>
        </div>
    </div>
    <!-- BLOG MBARON KETU -->

    <div class="products">
        <div class="productsHeading">
            <h1>About Us</h1>
        </div>
        <div class="cards">
            <div class="card">
                <div class="card-icon">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div class="card-text">
                    <p>Behind metaverse is a team of passionate individuals with diverse backgrounds in virtual reality,
                        gaming, and technology. Our experts bring a wealth of experience in creating groundbreaking digital
                        experiences, ensuring that every aspect of our metaverse is crafted with precision and creativity.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-icon">
                    <i class="fa-solid fa-gears"></i>
                </div>
                <div class="card-text">
                    <p>Explore a world of endless possibilities with metaverse. From cutting-edge virtual
                        environments to interactive experiences, our metaverse offers a range of unique
                        features designed to captivate and engage users. Immerse yourself in a digital
                        realm where creativity knows no bounds.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-icon">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <div class="card-text">
                    <p>We believe in the power of collaboration to unlock new dimensions
                        within the metaverse. Metaverse proudly engages in strategic partnerships
                        with industry leaders, content creators, and technology innovators.
                        These collaborations enrich our platform, providing users with a
                        kaleidoscope of experiences and opportunities.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-icon">
                    <i class="fa-solid fa-code-branch"></i>
                </div>
                <div class="card-text">
                    <p>The future of metaverse holds boundless possibilities. As we continue to innovate
                        and explore new horizons, we invite you to be a part of our journey.
                        Join us in shaping the future of the metaverse, where imagination knows no
                        limits, and together, we'll redefine the digital landscape for generations to come.</p>
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

    <script src="./JavaScript/typewriter.js"></script>
    <script>
        let i = 0;
        let imgArray = ['slide1.jpg', 'slide2.jpg', 'slide3.jpg'];

        function changeImg() {
            document.getElementById('slideshow').src = imgArray[i];

            if (i < imgArray.length - 1) {
                i++;
            } else {
                i = 0;
            }
            //setTimeout("changeImg()", 2600);
        }
        document.addEventListener(onload, changeImg());
    </script>
</body>

</html>