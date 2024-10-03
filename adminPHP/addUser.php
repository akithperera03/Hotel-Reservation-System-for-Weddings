<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userName = $_POST["userName"];
    $userFName= $_POST["userFName"];
    $userEmail = $_POST["userEmail"];
    $userPSW= $_POST["userPSW"];

    $sql = "INSERT INTO users (userName,userEmail,userFName,userPSW) VALUES (?, ?, ?,?)";
    
    // Prepare the SQL statement to prevent SQL injection
    if ($stmt = $connection->prepare($sql)) {
        $stmt->bind_param( 'ssss',$userName,$userEmail,$userFName,$userPSW); // Assuming empID and role are strings
        
        if ($stmt->execute()) {
            echo "<script>alert('User added successfully!');</script>";
            echo "<script>window.location.href = '../admin_panel.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

?>