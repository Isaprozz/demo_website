<?php
$servername = "localhost";
$username = "root"; // Change if using a hosting service
$password = ""; // Set your password if required
$dbname = "contact_messages"; // Ensure this database exists

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
