<?php
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "project_db"; // The name of your MySQL database

// Create connection
$conn = new mysqli($servername, $username, $password, $database,4306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
// You can include additional code here, such as executing queries or defining functions

// Close connection
$conn->close();
?>
