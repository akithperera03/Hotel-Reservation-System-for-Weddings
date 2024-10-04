<?php include 'header.php'; ?>
<title>Update Account</title>
<link rel="stylesheet" href="styles/updateAcc.css">
<body>
    <div class="update-account">
        <div class="form-container">
            <h2>Update Account Details</h2>

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

            // Include database configuration
            require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

            $errorMessage = $successMessage = "";

            // Get current user data from the database
            $userId = $_SESSION['user_id'];
            $stmt = $connection->prepare("SELECT userName, userEmail, userFName FROM users WHERE userID = ?");
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $stmt->bind_result($userName, $userEmail, $userFName);
            $stmt->fetch();
            $stmt->close();

            // Check if form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Capture updated form data
                $newUserName = $_POST['user-name'];
                $newUserEmail = $_POST['user-email'];
                $newUserPassword = $_POST['user-password'];
                $newUserFName = $_POST['user-fname'];

                // Update user details in the database
                $stmt = $connection->prepare("UPDATE users SET userName = ?, userEmail = ?, userPSW = ?, userFName = ? WHERE userID = ?");
                $stmt->bind_param("ssssi", $newUserName, $newUserEmail, $newUserPassword, $newUserFName, $userId);

                if ($stmt->execute()) {
                    $successMessage = "Account updated successfully.";
                } else {
                    $errorMessage = "Error: " . $stmt->error;
                }

                // Close the statement
                $stmt->close();
                // Close the connection
                $connection->close();
            }

            // Display error or success messages
            if (!empty($errorMessage)) {
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }

            if (!empty($successMessage)) {
                echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
            ?>

            <!-- Update Account Form -->
            <form method="POST" action="updateAccount.php">
                <label for="user-name">User Name:</label>
                <input type="text" id="user-name" name="user-name" value="<?php echo $userName; ?>" required>

                <label for="user-email">Email:</label>
                <input type="email" id="user-email" name="user-email" value="<?php echo $userEmail; ?>" required>

                <label for="user-password">Password:</label>
                <input type="password" id="user-password" name="user-password" required placeholder="Enter new password">

                <label for="user-fname">First Name:</label>
                <input type="text" id="user-fname" name="user-fname" value="<?php echo $userFName; ?>" required>

                <button type="submit">Update Account</button>
            </form>
        </div>
    </div>
<br><br>
<?php include 'footer.php'; ?>
