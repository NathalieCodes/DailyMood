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
$comment = $mood["comment"];?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("head.include.php"); ?>
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
            <?php if ($type == "happy") { ?>
                <a class="mood-happy mood-selected"><img src="image/button-happy.png" alt="happy"></a>
                <a class="mood-meh"><img src="image/button-meh.png" alt="meh"></a>
                <a class="mood-sad"><img src="image/button-sad.png" alt="sad"></a>
            <?php } elseif ($type == "meh") { ?>
                <a class="mood-happy"><img src="image/button-happy.png" alt="happy"></a>
                <a class="mood-meh mood-selected"><img src="image/button-meh.png" alt="meh"></a>
                <a class="mood-sad"><img src="image/button-sad.png" alt="sad"></a>
            <?php } else { ?>
                <a class="mood-happy"><img src="image/button-happy.png" alt="happy"></a>
                <a class="mood-meh"><img src="image/button-meh.png" alt="meh"></a>
                <a class="mood-sad mood-selected"><img src="image/button-sad.png" alt="sad"></a>
            <?php } ?>
        </div>
    </header>

    <section>
        <p>How was your day?</p>
        <textarea class="enter-comment"><?= $comment ?></textarea>
    </section>

    <nav class="bottom-nav">
        <a class="button button-cancel" href="mood.php?moodId=<?= $moodId ?>">Cancel</a>
        <a class="button button-primary" href="mood.php?moodId=<?= $moodId ?>">Ok</a>
    </nav>
</div>

</body>
</html>