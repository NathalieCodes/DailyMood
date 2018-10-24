<?php
    $page = $_GET ["page"];
    if ($page == 2) {
        $image = "<img src=\"image/onboarding-2.png\" alt=\"monthly view\">";
        $text = "Enter your mood everyday it's private trust us give your money";
        $linkNext = "<a class=\"button button-primary\" href=\"onboarding.php?page=3\">Next</a>";
        $linkPrev = "<a class=\"button button-secondary\" href=\"onboarding.php\">Prev</a>";
    }
    elseif ($page == 3) {
        $image = "<img src=\"image/onboarding-3.png\" alt=\"monthly view\">";
        $text = "bla bla bla";
        $linkNext = "<a class=\"button button-primary\" href=\"index.php\">Let's go</a>";
        $linkPrev = "<a class=\"button button-secondary\" href=\"onboarding.php?page=2\">Prev</a>";
    }
    else {
        $image = "<img src=\"image/onboarding-1.png\" alt=\"monthly view\">";
        $text = "Get monthly view of your mood";
        $linkNext = "<a class=\"button button-primary\" href=\"onboarding.php?page=2\">Next</a>";
        $linkPrev = "<a href=\"#\" class=\"button button-ghost\"></a>";
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
<body class="onboarding">

    <div class="parent">
        <header>
            <h1>
                <img class="logo" src="image/Logo.png" alt="Daily Mood">
            </h1>
        </header>

        <section>
            <p><?php echo $text; ?></p>
            <?php echo $image; ?>
        </section>

        <nav class="bottom-nav">
            <?php echo $linkPrev; ?>
            <?php echo $linkNext; ?>
        </nav>
    </div>

</body>
</html>