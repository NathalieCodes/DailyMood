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
    <?php include ("head.include.php"); ?>
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