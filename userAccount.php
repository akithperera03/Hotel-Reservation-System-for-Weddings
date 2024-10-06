<?php include 'header.php'?>
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

// Retrieve the logged-in user's ID from the session
$username = $_SESSION['user_id'];

// Prepare the SQL query to fetch user details
$sql = "SELECT * FROM users WHERE userID = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $username); // Changed to bind integer instead of string
$stmt->execute();
$result = $stmt->get_result();

// Check if a user record was found
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $userid = $user['userID'];
    $email = $user['userEmail'];  // Changed to match your database field for email
    $fname = $user['userFName'];  // You were using $fname but it was not defined earlier
    $password = $user['userPSW'];
} else {
    echo "No user found!";
    exit();
}

// Close the statement
$stmt->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Account</title>
    <link rel="stylesheet" href="styles/userAcc.css">
</head>
<body>
    <main>
    <div class="account-container">
        <h2>Welcome <br> <?php echo $fname; ?>!</h2>
        <br>
        <img src="images/userIcon.png" alt="User Icon">
        <p><strong>User ID:</strong> <?php echo $userid; ?></p>
        <p><strong>Username:</strong> <?php echo $username; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>

        <div class="button-group">
            <button class="update-btn" onclick="window.location.href='updateRegUser.php';">Update</button>
            <button class="delete-btn" onclick="window.location.href='deleteRegUser.php';">Delete</button>
        </div>

        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
    </main>
    <?php include 'footer.php'?>
