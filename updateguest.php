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

<?php include 'header.php'; ?>
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/updateguest.css">
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
<?php include 'footer.php'; ?>