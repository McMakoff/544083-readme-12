<?php
$con = db_connect();
include_server_error_page($con);
mysqli_set_charset($con, "utf8");
require_once ('vendor/autoload.php');
date_default_timezone_set('Europe/Moscow');
