<?php
$userId = $_COOKIE['userId'];
if (empty($userId)) {
    header("Location: /login.php");
    exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("head.include.php"); ?>
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