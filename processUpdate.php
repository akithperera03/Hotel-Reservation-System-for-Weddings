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

// Retrieve POST data
$userid = $_POST['userid'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the SQL query to update user details
$sql = "UPDATE users SET userFName = ?, userEmail = ?, userPSW = ? WHERE userID = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("sssi", $fname, $email, $password, $userid); // Updated with your database column names

// Execute the query and check for success
if ($stmt->execute()) {
    echo "<script>
            alert('Details updated successfully!');
            window.location.href = 'userAccount.php';
          </script>";
} else {
    echo "Error: " . $connection->error;
}

// Close the statement and connection
$stmt->close();
$connection->close();
?>
