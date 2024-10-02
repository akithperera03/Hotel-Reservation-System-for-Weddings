<?php
// Database connection details
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "iwt"; 

// Create a new MySQLi connection
$connection = new mysqli($servername, $username, $password, $database);

// Check if the connection was successful
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    
}
?>
