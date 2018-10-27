<?php
    $mood = $_GET["mood"];
    if ($mood == "happy") {
        $monImage = "<img class=\"mood-select\" src=\"image/button-happy.png\" alt=\"Selected Mood Happy\">";
    }
    elseif ($mood == "meh") {
        $monImage = "<img class=\"mood-select\" src=\"image/button-meh.png\" alt=\"Selected Mood Meh\">";
    }
    else {
        $monImage = "<img class=\"mood-select\" src=\"image/button-sad.png\" alt=\"Selected Mood Sad\">";
    }
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
<body class="comment">

    <nav class="nav-bar">
        <a href="index.php" class="button-back button">Pick your mood</a>
        <h1>How was your day?</h1>
        <a href="#" class="button-ghost button"></a>
    </nav>

    <div class="parent">
        <div class="emoji-comment">
            <header>
                <?php echo $monImage; ?>
            </header>

            <section>
                <textarea class="enter-comment" placeholder="Write here about your day"></textarea>
            </section>
        </div>
        <nav class="bottom-nav">
            <a class="button button-skip" href="mood_list.php">Skip</a>
            <a class="button button-primary" href="mood_list.php">Okay</a>
        </nav>
    </div>

</body>
</html>