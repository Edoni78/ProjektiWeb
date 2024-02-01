<?php 
 include_once 'userRepository.php';
 include_once 'user.php';
 
 if (isset($_POST['registerbtn'])) {
     if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) ||
         empty($_POST['password'])) {
         echo "Fill all fields!";
     } else {
         $name = $_POST['name'];
         $surname = $_POST['surname'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $id = $name . rand(100, 999);
 
         $user = new User($id, $name, $surname, $email, $password);
         $userRepository = new UserRepository();
 
         $userRepository->insertUser($user);

         header("Location: login.php");
         exit();
     }
 }

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./CSS/register.css">
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

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="registerP" onsubmit= "return validateForm()" >

                <div class="registerHeadinf">
                    <h1>REGISTER</h1>
                </div>
    
                <div class="inputName input">
                    <p for="name">Name :</p>
                    <input type="text" id="name" required name="name">
                </div>
               
               <div class="inputSurname input">
                    <p for="surname">Surname :</p>
                    <input type="text" id="surname" name="surname">
               </div>
    
               <div class="inputEmail input">
                <p for="email">Email:</p>
                <input type="email" id="email" required name="email">
               </div>
    
               <div class="inputPassword input">
                <p for="password">Password:</p>
                <input type="password" id="password" name="password">
               </div>
    
               <div class="inputConfirmPassword input">
                <p for="confirmPassword">Confirm Password:</p>
                <input type="password" id="confirmPassowrd" name="confirmPassword">
               </div>
    
               <div class="buttonSubmit">
                <button name="registerbtn" onclick="validateForm()">Submit</button>
            </div>
    
        </form>
       

    </div>
       

    <script src="./JavaScript/registerValidate.js"></script>
    <?php include_once 'registercontroller.php';?>
</body>
</html>