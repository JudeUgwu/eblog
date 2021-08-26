<?php
require_once "../config/config.php";
session_start();
session_destroy();

$url = APP_URL."auth/login.php";
header("Location: $url");
exit();
