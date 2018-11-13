<?php
$error = $_GET["error"];
$errorMessage = "";
switch ($error) {
    case 1: 
        $errorMessage = "Username is too short!";
        break;
        
    case 2: 
        $errorMessage = "Password is to short, use at least 8 characters";
        break;

    case 3: 
        $errorMessage = "You can not use the same username and password";
        break;

    case 4: 
        $errorMessage = "Please don't use this word in your username";
        break;

    case 5: 
        $errorMessage = "This username is already used";
        break;

    case 6: 
        $errorMessage = "Oops an unknown error happened...";
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
    <form action="register_action.php" method="post">
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
        <input type="submit" value="register">
    </form>
</div>
</body>
</html>
