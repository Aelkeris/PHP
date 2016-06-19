<?php
$servername = "localhost";
$username = "Admin";
$password = "1234567890";
$db_name = "PHP_projekt";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>