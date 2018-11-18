<?php
date_default_timezone_set("America/Vancouver");

function redirectToLogin() {
    header("Location: /login.php");
    exit();
}

$cookieId = $_COOKIE['cookieId'];
if (empty($cookieId)) {
    redirectToLogin();
}

include("datab_connect.include.php");

$cookieId = mysqli_real_escape_string($connexion, $cookieId);

$query = "SELECT * FROM `users` WHERE `cookie_id` = \"$cookieId\";";
$result = mysqli_query($connexion, $query);
$user = mysqli_fetch_assoc($result);
if (count($user) == 0) {
    redirectToLogin();
}
