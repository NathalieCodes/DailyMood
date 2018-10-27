<!DOCTYPE html>
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
<body class="index">

    <nav class="nav-bar">
        <a href="#" class="button-ghost button"></a>
        <h1>How are you today?</h1>
        <a href="mood_list.php" class="button-close button">&times;</a>
    </nav>

    <div class="parent">
        <header>
            <h1>
            </h1>
        </header>

        <section>
            <p>Pick your daily mood</p>
            <div class="mood-button">
                <a href="comment.php?mood=happy" class="mood-happy"><img src="image/button-happy.png" alt="happy"></a>
                <a href="comment.php?mood=meh" class="mood-meh"><img src="image/button-meh.png" alt="meh"></a>
                <a href="comment.php?mood=sad" class="mood-sad"><img src="image/button-sad.png" alt="sad"></a>
                <a href="comment.php?mood=happy" class="mood-happy"><img src="image/button-happy.png" alt="happy"></a>
                <a href="comment.php?mood=meh" class="mood-meh"><img src="image/button-meh.png" alt="meh"></a>
                <a href="comment.php?mood=sad" class="mood-sad"><img src="image/button-sad.png" alt="sad"></a>
            </div>
        </section>

        <nav class="bottom-nav">
            <a class="button button-ghost"></a>
            <a class="button button-ghost"></a>
        </nav>
    </div>

</body>
</html>