<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in and user_id is set
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: /HotelReservationSystemforWeddings/login.php");
    exit();
}

// Include the database configuration file
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

// Retrieve the logged-in user_id from the session
$user_id = $_SESSION['user_id'];

// Check if the request method is POST (to confirm the form was submitted)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $deleteSql = "DELETE FROM users WHERE userID = ?";
    $deleteStmt = $connection->prepare($deleteSql);
    $deleteStmt->bind_param("i", $user_id); // Assuming userID is an integer

    // Execute the deletion query
    if ($deleteStmt->execute()) {
        // Destroy the session and log the user out
        session_destroy();
        echo "<script>
        alert('Account deleted successfully!');
        window.location.href='/HotelReservationSystemforWeddings/login.php';
        </script>";
        exit();
    } else {
        // Handle any errors that occurred during the deletion
        echo "Error deleting account: " . $connection->error;
    }

    // Close the statement
    $deleteStmt->close();
}

// Close the database connection
$connection->close();
?>
