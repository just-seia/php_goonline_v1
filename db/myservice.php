<?php

include "db_config.php";

$user_id = $_SESSION['user']['user_id'];
$sql = "SELECT * FROM `services` WHERE `service_user_id` = '$user_id'";
$result = $mysqli -> query($sql) -> fetch_assoc();

?>