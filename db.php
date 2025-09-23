<?php
$host = "localhost";
$user = "root";   // default XAMPP username
$pass = "";       // default XAMPP has empty password
$db   = "user_system";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
