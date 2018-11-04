<?php
include("data/moods.php");
$id = $_GET["id"];
$mood = $moods[$id];
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
            <a href="edit.php?id=<?= $id ?>">
                <img class="mood-select" src="image/button-<?= $type ?>.png" alt="Selected Mood <?= $type ?>">
            </a>
        </header>

        <section>
            <a href="edit.php?id=<?= $id ?>">
                <p>
                    <?= $comment ?>
                </p>
            </a>
        </section>

        <nav class="bottom-nav">
            <a class="button button-edit" href="edit.php?id=<?= $id ?>">Edit</a>
        </nav>
    </div>

</body>
</html>