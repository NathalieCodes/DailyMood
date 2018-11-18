<?php
include ("login_check.php");

$comment = $_POST["comment"];
$skip = $_POST["skip"];
$type = $_GET["mood"];
$date = date("Y-m-d H:i:s");
$userId = $user["id"];

if (!empty($skip)) {
    $comment = "";
}

mysqli_query($connexion,
    "INSERT INTO `moods` (`type`, `date`, `comment`, `user_id`) 
    VALUES ('$type', '$date', '$comment', $userId)"
);

header("Location: mood_list.php");
