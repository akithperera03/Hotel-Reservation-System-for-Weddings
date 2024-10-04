<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

// Start session to ensure user is logged in
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['guest_id'])) {
    $guest_id = $_GET['guest_id'];

    // Prepare the SQL statement to delete the guest
    $stmt = $connection->prepare("DELETE FROM guests WHERE guestid = ?");
    $stmt->bind_param("i", $guest_id);

    // Execute the deletion
    if ($stmt->execute()) {
        echo "Guest deleted successfully.";
        header("Location: ../bookingoverview.php"); // Redirect to the dashboard after deletion
        exit();
    } else {
        echo "Error deleting guest: " . $stmt->error;
    }

    $stmt->close();
   
}
?>
