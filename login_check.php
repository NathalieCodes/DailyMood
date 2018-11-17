<?php
$cookieId = $_COOKIE['cookieId'];
if (empty($cookieId)) {
    header("Location: /login.php");
    exit();
}
