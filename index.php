<?php
require_once("includes/config.php");

if (!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatchBox</title>
</head>
<body>
    <h1>You FUKING made it here dumbass</h1>
</body>
</html>