<?php
date_default_timezone_set("America/Vancouver");

$_POST["comment"];
$comment = $_POST["comment"];
$type = $_GET["mood"];
$date = date("Y-m-d H:i:s");
$userId = 1;
include ("datab_connect.include.php");

mysqli_query($connexion,
    "INSERT INTO `moods` (`type`, `date`, `comment`, `user_id`) 
    VALUES ('$type', '$date', '$comment', $userId)"
);

header("Location: mood_list.php");
