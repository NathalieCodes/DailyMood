<?php
include ("login_check.php");

$comment = mysqli_real_escape_string($connexion, $_POST["comment"]);
$skip = mysqli_real_escape_string($connexion, $_POST["skip"]);
$type = mysqli_real_escape_string($connexion, $_GET["mood"]);
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
