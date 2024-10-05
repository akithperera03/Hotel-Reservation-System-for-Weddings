<?php include 'header.php'; ?>
<?php
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
$user_id = $_SESSION['user_id'];

// Prepare the SQL query to fetch user details
$sql = "SELECT * FROM users WHERE userID = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $user_id); // User ID is likely an integer
$stmt->execute();
$result = $stmt->get_result();

// Check if a user record was found
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $userid = $user['userID'];
    $fname = $user['userFName'];  // Assuming 'userFName' as field for full name
    $email = $user['userEmail'];  // Assuming 'userEmail' as field for email
    $password = $user['userPSW']; // Assuming 'userPSW' as field for password
} else {
    echo "No user found!";
    exit();
}

// Close the statement and connection
$stmt->close();
$connection->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User Details</title>
    <link rel="stylesheet" href="styles/updateRegUser.css"> 
</head>
<body>
    <main>
    <div class="update-container">
        <h2>Update Your Details</h2>
        <form action="processUpdate.php" method="post">
            <input type="hidden" name="userid" value="<?php echo $userid; ?>">

            Full Name:
            <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" required>

            User ID:
            <input type="text" id="username" name="username" value="<?php echo $user_id; ?>" required readonly> 

            Email:
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

            Password:
            <input type="password" id="password" name="password" value="<?php echo $password; ?>" required>

            <button type="submit" class="update-btn">Update Details</button>
        </form>
        <a href="userAccount.php">Back to Account</a>
    </div>
    </main>
<?php include 'footer.php' ?>