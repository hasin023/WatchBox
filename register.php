<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

$account = new Account($con);

if (isset($_POST["submitButton"])) {

    $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
    $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
    $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
    $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
    $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
    $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
    $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);

    $success = $account->register($firstName, $lastName, $username, $email, $email2, $password, $password2);

    if ($success) {
        //Store session
        header("Location: index.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
                <h3>Sign Up</h3>
                <span>to continue to WatchBox</span>
            </div>

            <form method="POST">
                <?php echo $account->getError(Constants::$firstNameError) ?>
                <input type="text" name="firstName" placeholder="First name" required>

                <?php echo $account->getError(Constants::$lastNameError) ?>
                <input type="text" name="lastName" placeholder="Last name" required>

                <?php echo $account->getError(Constants::$usernameError) ?>
                <?php echo $account->getError(Constants::$usernameTakenError) ?>
                <input type="text" name="username" placeholder="Username" required>

                <?php echo $account->getError(Constants::$emailInvalidError) ?>
                <?php echo $account->getError(Constants::$emailTakenError) ?>
                <input type="email" name="email" placeholder="Email" required>
                
                <?php echo $account->getError(Constants::$emailMatchError) ?>
                <input type="email" name="email2" placeholder="Confirm email" required>

                <?php echo $account->getError(Constants::$passwordShortError) ?>
                <input type="password" name="password" placeholder="Password" required>

                <?php echo $account->getError(Constants::$passwordMatchError) ?>
                <input type="password" name="password2" placeholder="Confirm password" required>

                <input type="submit" name="submitButton" value="SUBMIT">

            </form>

            <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>

        </div>

    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src = "Assets/js/script.js"></script>
</body>
</html>