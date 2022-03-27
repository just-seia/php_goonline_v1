<?php

include 'db_config.php';

$user_fullname = $_POST['fullname'];
$user_telegram_id = $_POST['telegram_id'];
$user_email = $_POST['email'];
$user_password = md5($_POST['password']);

$sql = "SELECT * FROM `users` WHERE `user_email` = '$user_email'";

if(!$mysqli -> query($sql) -> num_rows) {
    $sql = "INSERT INTO `users` (`user_id`, `user_fullname`, `user_telegram_id`, `user_email`, `user_password`, `user_img`, `user_role_id`) VALUES (NULL, '$user_fullname', '$user_telegram_id', '$user_email', '$user_password', 'profile.jpg', 1)";
    $result = $mysqli -> query($sql);
    if($result) {
        header('location: ../login.php');
    } else {
        header('location: ../register.php?register_error=Error');
    }
} else {
    header('location: ../register.php?email_error=Email alredy registred');
}

?>