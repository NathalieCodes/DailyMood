<?php
include ("login_check.php");

$userId = $user["id"];
$rows = mysqli_query($connexion,
    "SELECT * 
    FROM `moods` 
    WHERE `user_id` = $userId 
    ORDER BY `date` DESC 
    LIMIT 10 "
);

$moods = mysqli_fetch_all($rows, MYSQLI_ASSOC);

$mood = $moods[0];

$lastDate = strtotime($mood["date"]);
$midnightDate = strtotime(date("Y-m-d") . " 00:00:01");

if ($lastDate >= $midnightDate) {
    $alreadyPosted = true;
} else {
    $alreadyPosted = false;
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("head.include.php"); ?>
</head>
<body class="mood-list">

    <nav class="nav-bar">
        <a href="#" class="button-ghost button"></a>
        <h1>Moods</h1>
        <a href="#" class="button-ghost button"></a>
    </nav>

    <div class="parent">
        <section>
            <ul>
                <?php
                foreach ($moods as $mood) {
                    $type = $mood["type"];
                    $date = $mood["date"];
                    $comment = $mood["comment"];
                    $moodId = $mood["id"];
                ?>
                <li class="cell-<?= $type ?>">
                    <a href="mood.php?moodId=<?= $moodId ?>">
                        <img src="image/button-<?= $type ?>.png" alt="<?= $type ?>">
                        <span class="mood-info">
                            <span class="mood-date"><?= "$date" ?></span>
                            <p><?= $comment ?></p>
                        </span>
                    </a>
                </li>
                <?php } ?>
            </ul>
            <?php if (!$alreadyPosted) { ?>
            <a class="cell-action" href="index.php">
                <span>How are you today?</span>
            </a>
            <?php } else { ?>
            <a class="cell-action already-posted" href="#">
                <span>Already posted today</span>
            </a>
            <?php } ?>
        </section>
    </div>
</body>
</html>