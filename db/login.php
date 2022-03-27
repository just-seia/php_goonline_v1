<?php

include 'db_config.php';

$user_email = $_POST['email'];
$user_password = md5($_POST['password']);

$sql = "SELECT * FROM `users` WHERE `user_email` = '$user_email' AND `user_password` = '$user_password'";
$result = $mysqli -> query($sql);

if($result -> num_rows) {
    $_SESSION['user'] = $result -> fetch_assoc();
    header('location: ../index.php');
} else {
    header('location: ../login.php?auth_error=Password od email not correct');
}

?>