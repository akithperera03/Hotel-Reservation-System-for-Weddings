<?php
session_start();  // Start the session

// Check if the admin is logged in
if (!isset($_SESSION['empID'])) {
    // Redirect to login page if not logged in
    header("Location: Location: ../admin_panel.php");
    exit;
}

// Include the configuration file for database connection
require_once '../configurations/config.php';

// Get the admin's ID from the session
$adminID = $_SESSION['empID'];

// Query the admins table to fetch admin details
$sql = "SELECT empID, role FROM admins WHERE adminID = '$adminID'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $admin = $result->fetch_assoc();
} else {
    echo "No admin found!";
}
?>
