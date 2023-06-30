<?php
require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/Entity.php");

if (!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WatchBox &mdash; Shows in one place</title>

    <link rel = "icon shortcut" href = "Assets/images/logo-icon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Lato:wght@300;400;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type = "text/css" href="Assets/css/style.css">

    <script src="https://kit.fontawesome.com/6ad84287a9.js" crossorigin="anonymous"></script>
</head>

    <body>
        <div class="wrapper">