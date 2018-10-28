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
    <meta charset="UTF-8">
    <title>Daily Mood</title>
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#5b119d">
    <meta name="apple-mobile-web-app-title" content="Daily Mood">
    <meta name="application-name" content="Daily Mood">
    <meta name="msapplication-TileColor" content="#5b119d">
    <meta name="theme-color" content="#5b119d">
</head>
<body class="mood">

    <nav class="nav-bar">
        <a class="button-back button" href="mood_list.php">Mood List</a>
        <h1>My Mood</h1>
        <a href="#" class="button-ghost button"></a>
    </nav>

    <div class="parent">
        <header>
            <a href="edit.html">
                <img class="mood-select" src="image/button-<?= $type ?>.png" alt="Selected Mood <?= $type ?>">
            </a>
        </header>

        <section>
            <a href="edit.html">
                <p>
                    <?= $comment ?>
                </p>
            </a>
        </section>

        <nav class="bottom-nav">
            <a class="button button-edit" href="edit.html">Edit</a>
        </nav>
    </div>

</body>
</html>