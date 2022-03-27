<?php

include 'db_config.php';

if(isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];
    $sql = "SELECT service_id, service_title, service_description, service_cost, service_img, user_fullname, user_telegram_id, user_img FROM `services`, `users` WHERE `user_id` = service_user_id AND `service_id` = $service_id";
    $result = $mysqli -> query($sql) -> fetch_assoc();

    if(!isset($result)) {
        header('location: services.php');
    }

} else {
    header('location: services.php');
}



?>