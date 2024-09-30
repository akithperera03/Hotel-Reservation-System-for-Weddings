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
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/addguest.css">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="icon" href="images/icon/icon.ico" type="image/x-icon">

</head>
<body>

    <header>
        <div class="container">
            <div class="logo"> 
                <a href="index.php"><img src="images/logo_1.jpg" id="logoimage"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutUs.php">ABOUT US</a></li>
                    <li><a href="ourFeatures.php">OUR FEATURES</a></li>
                    <li><a href="venue.php">VENUE</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contactUs.php">CONTACT US</a></li>
                </ul>
            </nav>
            <div class="user">
                <span>Hello!</span>
                <a href="login.php">Login</a>
            </div>
        </div>
    </header>

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
<footer>
    <div class="container">
        <div class="logo"> 
            <a href="index.php"><img src="images/logo_1.jpg" id="logoimage" alt="Aurora Bliss Logo"></a>
        </div> 
        <div class="social">
            <a href="https://www.instagram.com"><img src="images/socialmedia/instagram.jpeg" alt="Instagram"></a>
            <a href="https://www.facebook.com"><img src="images/socialmedia/facebook.png" alt="Facebook"></a>
            <a href="https://www.x.com"><img src="images/socialmedia/x.png" alt="X"></a>
            <a href="https://www.linkedin.com"><img src="images/socialmedia/linkedin.png" alt="LinkedIn"></a>
        </div>
        <div class="legal">
            <div class="bottomlinks">
                <p> 
                    <a href="termsAndConditions.php"> Terms and Conditions </a> | 
                    <a href="privacyPolicy.php"> Privacy and Cookies Policy </a> | 
                    <a href="FAQ.php"> FAQ </a> |
                    <a href="careers.php"> Work with us </a>
                </p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2024 Aurora Bliss. All Rights Reserved.</p>
            <p>Website developed by <a href="developer_info.html">CodeCrafters</a></p>
        </div>
    </div>
</footer>
</body>
</html>

