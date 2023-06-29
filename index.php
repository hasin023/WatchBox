<?php
require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");

if (!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];

$preview = new PreviewProvider($con, $userLoggedIn);
$preview->createPreviewVideo(null);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatchBox</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Lato:wght@300;400;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

</head>
<body>
    <h1>You FUKING made it here dumbass</h1>








<script src = "Assets/js/script.js"></script>
</body>
</html>