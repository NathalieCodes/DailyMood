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
<body class="mood-edit">

    <nav class="nav-bar">
        <a href="#" class="button-ghost button"></a>
        <h1>Edit</h1>
        <a href="mood.php" class="button-close button">close</a>
    </nav>

    <div class="parent">
        <header>
            <div class="mood-button">
                <?php if ($type == "happy") {
                    echo "<a class=\"mood-happy mood-selected\"><img src=\"image/button-happy.png\" alt=\"happy\"></a>
                <a class=\"mood-meh\"><img src=\"image/button-meh.png\" alt=\"meh\"></a>
                <a class=\"mood-sad\"><img src=\"image/button-sad.png\" alt=\"sad\"></a>";
                }
                elseif ($type == "meh") {
                    echo "<a class=\"mood-happy\"><img src=\"image/button-happy.png\" alt=\"happy\"></a>
                <a class=\"mood-meh mood-selected\"><img src=\"image/button-meh.png\" alt=\"meh\"></a>
                <a class=\"mood-sad\"><img src=\"image/button-sad.png\" alt=\"sad\"></a>";
                }
                else {
                    echo "<a class=\"mood-happy\"><img src=\"image/button-happy.png\" alt=\"happy\"></a>
                <a class=\"mood-meh\"><img src=\"image/button-meh.png\" alt=\"meh\"></a>
                <a class=\"mood-sad mood-selected\"><img src=\"image/button-sad.png\" alt=\"sad\"></a>";
                }
                ?>
            </div>
        </header>

        <section>
            <p>How was your day?</p>
            <textarea class="enter-comment"><?= $comment ?></textarea>
        </section>

        <nav class="bottom-nav">
            <a class="button button-cancel" href="mood.php?id=<?= $id ?>">Cancel</a>
            <a class="button button-primary" href="mood.php?id=<?= $id ?>">Ok</a>
        </nav>
    </div>

</body>
</html>