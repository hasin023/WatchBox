<?php

ob_start(); // Starts output buffering
session_start();


date_default_timezone_set("Asia/Dhaka");

try {
    $con = new PDO("mysql:dbname=watchbox;host=localhost", "root", "", );
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    exit("Connection Failed: " . $e->getMessage());
}
?>