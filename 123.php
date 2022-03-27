<?php

// $uri = 'http://localhost:8888/unicat1/';
// $result = explode('/', $uri, 3);
// var_dump( $result[1] );

// print_r($_SERVER['REQUEST_URI']);

// $time = time() % 1000;
// $rand = rand() % 1000;
// $result = $time.$rand;
// echo $result;

// include 'db/db_config.php';
// $sql = "SELECT `servise_id`, `servise_title`, `servise_description`, `servise_cost`, `fullname` FROM `servises`, `users` WHERE `user_id` = u_id";
// $result = $mysqli -> query($sql);
// if($result -> num_rows) {
//     var_dump($result);
//     $_SESSION['user'] = $result -> fetch_assoc();
//     header('location: ../index.php');
// } else {
//     header('location: ../login.php?auth_error=Password od email not correct');
// }

// include 'db/db_config.php'; 
// $service_id = $_GET['service_id'];
// $sql = "SELECT service_id, service_title, service_description, service_cost, service_img, user_fullname, user_telegram_id, user_img FROM `services`, `users` WHERE `user_id` = service_user_id AND `service_id` = $service_id";
// $result = $mysqli -> query($sql) -> fetch_assoc();
// print_r($result);

?>