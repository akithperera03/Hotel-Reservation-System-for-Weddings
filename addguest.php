<?php include 'header.php'; ?>
<title>Aurora Bliss</title>
<link rel="stylesheet" href="styles/addguest.css">
<body>
    <div class="guest">
        <div class="image-container">
            <img src="images/stickers/wedding (1).png">
        </div>
        <div class="form-container">
            <h2>Add Guest List</h2>
            
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

            // Initialize messages
            $errorMessage = $successMessage = "";

            // Check if form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Capture form data
                $orderID = $_POST['order-id-guest'];
                $guestName = $_POST['guest-name'];
                $nicNumber = $_POST['nic-number'];

                // Get active user's ID from session
                $userId = $_SESSION['user_id'];

                // Check if orderID exists in wedding_reservations
                $orderCheckQuery = "SELECT * FROM wedding_reservations WHERE orderID = ?";
                $stmtOrderCheck = $connection->prepare($orderCheckQuery);
                $stmtOrderCheck->bind_param("i", $orderID);
                $stmtOrderCheck->execute();
                $orderResult = $stmtOrderCheck->get_result();

                if ($orderResult->num_rows > 0) {
                    // Prepare SQL to insert guest details
                    $stmt = $connection->prepare("INSERT INTO guests (userID, orderID, guest_name, nic_number) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("iiss", $userId, $orderID, $guestName, $nicNumber);

                    // Execute the query
                    if ($stmt->execute()) {
                        $successMessage = "Guest added successfully.";
                    } else {
                        $errorMessage = "Error: " . $stmt->error;
                    }

                    // Close the statement
                    $stmt->close();
                } else {
                    $errorMessage = "Invalid order ID.";
                }

                // Close order check statement
                $stmtOrderCheck->close();
                // Close the connection
                $connection->close();
            }

            // Display any error or success messages
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

            <!-- Guest Form -->
            <form method="POST" action="addguest.php">
                <label for="order-id-guest">Order ID:</label>
                <input type="text" id="order-id-guest" name="order-id-guest" required placeholder="Enter order ID">

                <label for="guest-name">Guest Name:</label>
                <input type="text" id="guest-name" name="guest-name" required placeholder="Enter guest name">

                <label for="nic-number">NIC Number:</label>
                <input type="text" id="nic-number" name="nic-number" required placeholder="Enter NIC number">

                <button type="submit">Add guest</button>
            </form>
        </div>
    </div>
<br><br>
<?php include 'footer.php'; ?>
