<?php

include 'db_config.php';

session_destroy();

header('location: ../login.php');

?>