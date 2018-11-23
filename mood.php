<?php
include ("login_check.php");
$moodId = $_GET["moodId"];
$moodId = mysqli_real_escape_string($connexion, $moodId);

$userId = $user["id"];
$query = "SELECT * 
    FROM `moods` 
    WHERE `user_id` = $userId 
    AND `id` = $moodId;";
$result = mysqli_query($connexion, $query);
$mood = mysqli_fetch_assoc($result);

$type = $mood["type"];
$date = $mood["date"];
$day = $date["day"];
$number = $mood["date"]["number"];
$month = $date["month"];
$year = $date["year"];
$comment = $mood["comment"];
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("head.include.php"); ?>
</head>
<body class="mood">

    <nav class="nav-bar">
        <a class="button-back button" href="mood_list.php">Mood List</a>
        <h1>My Mood</h1>
        <a href="#" class="button-ghost button"></a>
    </nav>

    <div class="parent">
        <header>
            <a href="edit.php?moodId=<?= $moodId ?>">
                <img class="mood-select" src="image/button-<?= $type ?>.png" alt="Selected Mood <?= $type ?>">
            </a>
        </header>

        <section>
            <a href="edit.php?moodId=<?= $moodId ?>">
                <p>
                    <?= $comment ?>
                </p>
            </a>
        </section>

        <nav class="bottom-nav">
            <a class="button button-edit" href="edit.php?moodId=<?= $moodId ?>">Edit</a>
        </nav>
    </div>

</body>
</html>