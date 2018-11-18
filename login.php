<?php
$error = $_GET["error"];
$errorMessage = "";
switch ($error) {
    case 1: 
        $errorMessage = "Username or Password is incorrect";
        break;
}
?><html>
<head>
    <?php
    include("head.include.php");
    ?>
</head>
<body>
<form action="login_action.php" method="post">
    <div class="form-wrapper">
        <h1>Login</h1>
        <div class="login">
            <?php
            if ($errorMessage != "") {
                echo "<span class=\"error\">$errorMessage</span>";
            }
            ?>
            <label>
                Username:
                <input type="text" name="username" value="">
            </label>
            <label>
                Password:
                <input type="password" name="password" value="">
            </label>
            <input class="button-login button button-primary" type="submit" value="Log in">
        </div>
    </div>
</form>
</body>
</html>
