<?php
session_start(); // Ensure session is started

require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

// Check if the user is logged in as admin
// Check if message_id is set
if (isset($_POST['message_id'])) {
    $message_id = intval($_POST['message_id']); // Get message ID and cast to integer to prevent SQL injection

    // Delete the message from the database
    $sql = "DELETE FROM contact WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $message_id); // Bind the message ID to the query
    if ($stmt->execute()) {
        // Redirect back to messages page with success message
        header("Location: ../admin_panel.php?message=Message deleted successfully");
    } else {
        // Handle error
        header("Location: ../admin_panel.php?message=Error deleting message");
    }
    $stmt->close();
} else {
    header("Location: ../admin_panel.php?message=Invalid request");
}

// Close the database connection
$connection->close();
?>
