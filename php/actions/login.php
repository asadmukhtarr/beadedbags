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
        $data = mysqli_fetch_array($result); // data fetch throuh query ..
        session_start(); // starting of session ...
        $_SESSION['user'] = [
            'id' => $data['id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'whatsapp' => $data['whatsapp']
        ];
        //$_SESSION['id'] = $row['id'];
        header('Location:../home.php');
        //$name = "";
        // $phone = 00000000000;
        // $phone = "00000000000";
    } else {
        $error = "Email or password is wrong";
        header('Location:../index.php?error='.$error);
    }
?>