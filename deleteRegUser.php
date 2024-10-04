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

// Prepare the SQL query to fetch user details
$sql = "SELECT * FROM users WHERE userID = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $user_id); // Assuming userID is an integer
$stmt->execute();
$result = $stmt->get_result();

// Check if a user record was found
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $userid = $user['userID'];
    $fname = $user['userFName'];
    $email = $user['userEmail'];
} else {
    echo "No user found!";
    exit();
}

// Close the statement
$stmt->close();
$connection->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Account</title>
    <link rel="stylesheet" href="styles/deleteRegUser.css">
</head>
<body>
    <div class="account-container">
        <h2>Delete Your Account</h2>
        <p><strong>Full Name:</strong> <?php echo $fname; ?></p>
        <p><strong>User ID:</strong> <?php echo $userid; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>

        <form method="post" action="processDelete.php">
            <p>Are you sure you want to delete your account? This action cannot be undone.</p>
            <button type="submit" class="delete-btn">Delete Account</button>
        </form>

        <a href="userAccount.php">Cancel</a>
    </div>
</body>
</html>
