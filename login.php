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
<div class="form-wrapper">
    <form action="login_action.php" method="post">
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
        <input type="submit" value="Log in">
    </form>
</div>
</body>
</html>
