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
    <?php include ("head.include.php"); ?>
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