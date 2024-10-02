<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myreservation";

// Establish a database connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$order_id_guest = "";
$guest_name = "";
$nic_number = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_id_guest = $_POST["order_id_guest"];
    $guest_name = $_POST["guest_name"];
    $nic_number = $_POST["nic_number"];

    do {
        // Validate inputs
        if (empty($order_id_guest) || empty($guest_name) || empty($nic_number)) {
            $errorMessage = "All the fields are required";
            break;
        }

        // Fetch the current maximum value of `No`
        $result = $connection->query("SELECT MAX(No) as max_no FROM GuestList");

        // Check if the query was successful
        if (!$result) {
            $errorMessage = "Failed to fetch the maximum `No`: " . $connection->error;
            break;
        }

        // Fetch the next `No` value
        $row = $result->fetch_assoc();
        $nextNo = $row['max_no'] + 1; // Increment the max `No` by 1

        // Check if `nextNo` was correctly calculated
        if (!$nextNo) {
            $nextNo = 1; // Default to 1 if no rows exist
        }

        // Insert the new record with incremented `No`
        $sql = "INSERT INTO GuestList (No, Name, NICNumber, OrderID) 
                VALUES ($nextNo, '$guest_name', '$nic_number', '$order_id_guest')";

        // Execute the insert query
        $result = $connection->query($sql);

        // Check if the insert was successful
        if (!$result) {
            $errorMessage = "Failed to insert new guest: " . $connection->error;
            break;
        }

        // Reset form fields after a successful submission
        $order_id_guest = "";
        $guest_name = "";
        $nic_number = "";

        $successMessage = "Guest added successfully";

        // Redirect to booking overview page
        header("Location: /myreservation/bookingoverview.php");
        exit;

    } while (false);
}
?>
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
            if (!empty($errorMessage)) {
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
            ?>

            <form>
                <label for="order-id-guest">Order ID:</label>
                <input type="text" id="order-id-guest" name="order-id-guest" required placeholder="Enter order ID">

                <label for="guest-name">Guest Name:</label>
                <input type="text" id="guest-name" name="guest-name" required placeholder="Enter guest name">

                <label for="nic-number">NIC Number:</label>
                <input type="text" id="nic-number" name="nic-number" required placeholder="Enter nic number">

                <?php
                if (!empty($successMessage)) {
                    echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    ";
                }
                ?>

                <button type="submit">Add guest</button>
            </form>
        </div>
    </div>
<br><br>
<?php include 'footer.php'; ?>
