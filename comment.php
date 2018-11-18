<?php
    include ("login_check.php");
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
    <?php include ("head.include.php"); ?>
</head>
<body class="comment">
<form method="post" action="comment_post.php?mood=<?= $mood ?>">

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
                <textarea name="comment" class="enter-comment" placeholder="Write here about your day"></textarea>
            </section>
        </div>
        <nav class="bottom-nav">
            <input type="submit" name="skip" value="Skip" class="button button-skip">
            <input type="submit" name="okay" value="Okay" class="button button-primary">
        </nav>
    </div>
</form>

</body>
</html>
