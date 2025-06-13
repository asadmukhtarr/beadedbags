<?php 
    $email = $_GET['email']; // email ..
    $password = $_GET['password']; // email ..
    include('cn.php'); // for connection ... asad0000
    $password = md5($password);
    $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($cn,$query) or die('cant run query');
    $row = mysqli_num_rows($result);
    if($row > 0){
        // sessions and cookies ...
        header('Location:../home.php');
    } else {
        $error = "Email or password is wrong";
        header('Location:../index.php?error='.$error);
    }
?>