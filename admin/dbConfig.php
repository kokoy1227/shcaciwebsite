<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "u965462440_shcaciwebsite";
$dbPassword = "Ncst1234";
$dbName     = "u965462440_shcaciwebsite";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>