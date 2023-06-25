<?php
if (isset($_POST["submitButton"])) {
    echo "Form was submitted";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel = "icon shortcut" href = "Assets/images/logo-icon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Lato:wght@300;400;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type = "text/css" href="Assets/css/style.css">
</head>

<body>

    <div class="signInContainer">

        <div class="column">

            <div class="header">
                <img src="Assets/images/logo-64.png" title="Logo" alt="Site logo" />
                <h3>Sign In</h3>
                <span>to continue to WatchBox</span>
            </div>

            <form method="POST">

                <input type="text" name="username" placeholder="Username" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="submit" name="submitButton" value="SUBMIT">

            </form>

            <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>

        </div>

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src = "Assets/js/script.js"></script>
</body>
</html>