<?php
session_start();
include_once 'userRepository.php';

if(isset($_POST['loginBtn'])) {
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['password'])) {
        $error = "Please fill in all fields";
    } else {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];

        $userRepository = new UserRepository();
        $user = $userRepository->getUserByName($name, $surname, $password);

        if($user) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['surname'] = $user['surname'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['role'] = $user['role'];

            if($_SESSION['role'] === 'admin') {
                header("Location: adminHome.php");
                exit();
            } else {
                header("Location: userHome.php");
                exit();
            }
        } else {
            $error = "Invalid username or password";
        }
    }
}
?>
