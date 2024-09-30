<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myreservation";

$connection = new mysqli($servername, $username, $password, $database); 

$No = "";
$order_id_guest = "";
$guest_name = "";
$nic_number = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!isset($_GET["id"])) {
        header("location:/myreservation/bookingoverview.php");
        exit;
    }

    $No = $_GET["id"];  // Use No for the ID
    $sql = "SELECT * FROM guestlist WHERE No = $No";  // Corrected SQL query
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if ($row) {
        $order_id_guest = $row['OrderID'];  // Use the correct field name
        $guest_name = $row['Name'];          // Use the correct field name
        $nic_number = $row['NICNumber'];     // Use the correct field name
    } else {
        header("location: /myreservation/bookingoverview.php");
        exit;
    }
} else {
    $No = $_POST["No"];
    $order_id_guest = $_POST["order_id_guest"];
    $guest_name = $_POST["guest_name"];
    $nic_number = $_POST["nic_number"];

    do {
        if (empty($order_id_guest) || empty($guest_name) || empty($nic_number)) {
            $errorMessage = "All the fields are required";
            break;
        }  

        $sql = "UPDATE guestlist SET OrderID = '$order_id_guest', Name = '$guest_name', NICNumber = '$nic_number' WHERE No = $No";  // Fixed SQL statement

        $result = $connection->query($sql);  // Make sure this is executed after fixing the SQL statement

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        
        $successMessage = "Guest updated successfully";
        header("location: /myreservation/bookingoverview.php");
        exit;
        
    } while (true);
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/updateguest.css">
    
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
            <h2>Update Guest List</h2>

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

                <button type="submit">Update</button>
            </form>
        </div>
    </div>
<br><br>
    <footer>
        <div class="container">
            <div class="logo"> 
                <a href="index.php"><img src="images/logo_1.jpg" id="logoimage"></a>
            </div> 
            <div class="social">
            <a href="https://www.instagram.com"><img src="images/socialmedia/instagram.jpeg" alt="Instagram"></a>
                <a href="https://www.facebook.com"><img src="images/socialmedia/facebook.png" alt="Facebook"></a>
                <a href="https://www.x.com"><img src="images/socialmedia/x.png" alt="X"></a>
                <a href="https://www.linkedin.com"><img src="images/socialmedia/linkedin.png" alt="LinkedIn"></a>
            </div>
    
            <div class="subscribe">
        <h3>Subscribe to Our Newsletter</h3>
        <form id="subscribeForm" method="POST" action="">
            <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
            <button type="submit">Submit</button>
        </form>

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
    </footer>
    
    </body>
    </html>