<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $empID = $_POST["empID"];
    $empPSW = $_POST["empPSW"];
    $role = $_POST["role"];

    $sql = "INSERT INTO employees (empID, empPSW, role) VALUES (?, ?, ?)";
    
    // Prepare the SQL statement to prevent SQL injection
    if ($stmt = $connection->prepare($sql)) {
        $stmt->bind_param("sss", $empID, $empPSW, $role); // Assuming empID and role are strings
        
        if ($stmt->execute()) {
            echo "<script>alert('Employee added successfully!');</script>";
            echo "<script>window.location.href = '../admin_panel.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
$connection->close();
?>