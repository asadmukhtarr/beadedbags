<?php
    session_start();
    session_destroy(); // all values of complete session will be null ..
//    session_unset($_SESSION['user']); // this will use when will unset a single of value session ..
//    session_unset($_SESSION['id']); // this will use when will unset a single of value session ..
    header('Location:../home.php'); // redirect after logout ..
?>