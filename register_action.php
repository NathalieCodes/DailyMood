<?php

$username = $_POST["username"];
$password = $_POST["password"];
$badWords = ["fuck", "dick", "tits"];

function redirectWithError($number) {
    header("Location: register.php?error=$number");
    exit();
}

if (strlen($username) < 3) {
    redirectWithError(1);
} elseif (strlen($password) < 8) {
    redirectWithError(2);
} elseif ($username == $password) {
    redirectWithError(3);
} elseif (in_array($username, $badWords)) {
    redirectWithError(4);
}

include("datab_connect.include.php");

$username = mysqli_real_escape_string($connexion, $username);
$password = mysqli_real_escape_string($connexion, $password);

$query = "SELECT * FROM `user` WHERE `username` = \"$username\";";
$result = mysqli_query($connexion, $query);
$row = mysqli_fetch_assoc($connexion, $result);
if (count($row) >= 1) {
    redirectWithError(5);
}

$password = sha1($password);
$date = date("Y-m-d H:i:s");

$query = "
    INSERT INTO `user` (`username`, `password`, `registration_date`) 
    VALUES (\"$username\", \"$password\", \"$date\");
";
$result = mysqli_query($connexion, $query);

if ($result == false) {
    redirectWithError(6);
}

header("Location: index.php");
