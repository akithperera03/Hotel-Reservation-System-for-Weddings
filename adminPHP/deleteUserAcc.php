<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

if (isset($_GET['delete_id'])) {
    $deleteID = $_GET['delete_id'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $connection->prepare("DELETE FROM users WHERE userID = ?");
    $stmt->bind_param("i", $deleteID); // Assuming id is an integer

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('User Account Deleted');</script>";
        echo "<script>window.location.href = '../admin_panel.php';</script>"; // Redirect to the admin panel or user management page
    } else {
        echo "Account deletion failed: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Delete ID not found";
}

// Close the database connection

?>
