<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("location: login.php");
    exit(); // Add exit to stop script execution after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
    <link rel="stylesheet" href="./CSS/dashboard.css">

    <style>

        .nav-auth{
            align-items: center;
        }
        .hrOfUser{
            font:max(15px,1vw) "rRegular";
        }
                table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
</style>
</head>


<body>
    
<div class="navbar">
        <div class="logoHolder">
            <a class="logo" href="adminHome.php"></a>
        </div>

        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="howitworks.php">How it Works</a>
            <a href="products.php">Products</a>
            <a href="aboutUs.php">About Us</a>
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


    <div class="dashboard">
        <div class="leftSideDashboard sidebar">
            <p><?php echo " Admin: ".$_SESSION['name']."" ?></p>
            <a>Dashboard</a>
            <a>Profile</a>
            <a>Analytics</a>
        </div>
        <div class="rightSideDashboard">
        <table class="tableDashboard">
                <tr>
                    <th>Users</th>
                    <th>Example</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Example</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Name</td>
                    <td>Mexico</td>
                </tr>
                </table>
        </div>
    </div>

</body>
</html>