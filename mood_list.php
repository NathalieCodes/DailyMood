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
                while ($mood = mysqli_fetch_assoc($rows)) {
                    $type = $mood["type"];
                    $date = $mood["date"];
                    $comment = $mood["comment"];
                ?>
                <li class="cell-<?= $type ?>">
                    <a href="mood.php?id=<?= $id ?>">
                        <img src="image/button-<?= $type ?>.png" alt="<?= $type ?>">
                        <span class="mood-info">
                            <span class="mood-date"><?= "$date" ?></span>
                            <p><?= $comment ?></p>
                        </span>
                    </a>
                </li>
                <?php } ?>
            </ul>
            <a class="cell-action" href="index.php">
                <span>How are you today?</span>
            </a>
        </section>
    </div>
</body>
</html>