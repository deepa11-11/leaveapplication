<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "leave_application";

// Create connection
$conn = new mysqli($servername,$password, $username, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
