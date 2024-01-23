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
            <a class="logo" href="index.html"></a>
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

        <form action="" class="login" onsubmit= "return validateForm()" >

                <div class="loginHeadinf">
                    <h1>LOGIN</h1>
                </div>
    
                <div class="inputName input">
                    <p for="">Name :</p>
                    <input type="text" id="name" required>
                </div>
               
               <div class="inputSurname input">
                    <p for="">Surname :</p>
                    <input type="text" id="surname">
               </div>
    
               <div class="inputPassword input">
                <p for="">Password:</p>
                <input type="password" id="password">
               </div>  
               <div class="buttonSubmit">
                <button onclick="validateForm()">Submit</button>
            </div>
    
        </form>
       

    </div>
       

    <script src="./JavaScript/loginValidate.js"></script>
</body>
</html>