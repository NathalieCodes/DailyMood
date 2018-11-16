<?php

$username = $_POST["username"];
$password = $_POST["password"];

function redirectWithError($number) {
    header("Location: login.php?error=$number");
    exit();
}

include("datab_connect.include.php");

$username = mysqli_real_escape_string($connexion, $username);
$password = mysqli_real_escape_string($connexion, $password);

$password = sha1($password);

$query = "SELECT * 
  FROM `users` 
  WHERE `username` = \"$username\"
  AND `password` = \"$password\";
  ";
$result = mysqli_query($connexion, $query);
$row = mysqli_fetch_assoc($result);
if (count($row) == 0) {
    redirectWithError(1);
}

$userId = $row["id"];

setcookie("userId", $userId, time()+24*60*60*30);

header("Location: index.php");
