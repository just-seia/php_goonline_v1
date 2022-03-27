<?php

include 'db_config.php';

$sql = "SELECT service_id, service_title, service_description, service_cost, service_img, user_fullname FROM `services`, `users` WHERE `user_id` = service_user_id";
$result = $mysqli -> query($sql)

?>