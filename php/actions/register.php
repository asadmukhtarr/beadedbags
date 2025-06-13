<?php 
    $name = $_POST['name']; // name ..
    $whatsapp = $_POST['whatsapp']; // whatsapp ...
    $email = $_POST['email']; // email ...
    $password = $_POST['password']; // password ... asad0000
    $confirm_password = $_POST['confirm_password']; // password ...
    // = assign a value ..
    // == for camparison ...
    // === for camparison of value + type ...
    if($password == $confirm_password){
        // connection between php and database ( mysqli is use to connect php project with database) ..
        include('cn.php'); // for connection ...
        $que = "SELECT * FROM `users` WHERE email='$email'";
        $result = mysqli_query($cn,$que) or die('cant run query');
        $row = mysqli_num_rows($result);
       // echo $row;
        if($row > 0){
            $error = "Email Already Exist";
            header('Location:../register.php?error='.$error);
        } else {
            $password = md5($password);
            $query ="INSERT INTO `users`(name,email,whatsapp,password) VALUES ('$name','$email','$whatsapp','$password')";
            mysqli_query($cn,$query) or die('cant run query');
            header('Location:../register.php');
        }
    } else {
        $error = "Password is not same";
        header('Location:../register.php?error='.$error);
    }
?>