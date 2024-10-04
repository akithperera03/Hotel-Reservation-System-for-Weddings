<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';
$error_msg = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    // Get the employee ID and password from the form
    $empID = $_POST["empID"];
    $empPSW = $_POST["empPSW"];

    // SQL query to select employee details based on employee ID
    $sql = "SELECT * FROM employees WHERE empID = ?";

    // Prepare the statement to prevent SQL injection
    if($stmt = $connection->prepare($sql)){
        // Bind the employee ID to the prepared statement
        $stmt->bind_param("s", $empID);

        // Execute the statement
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Check if employee exists
        if($result->num_rows > 0) {
            // Fetch the employee data
            $employee = $result->fetch_assoc();

            // Compare the plain-text password
            if ($empPSW == $employee['empPSW']) {
                // Start the session
                session_start();
                
                // Set session variables
                $_SESSION['adminID'] = $employee['id']; // Store the employee ID in session
                $_SESSION['role'] = $employee['role'];  // Store the role in session

                // Check role and redirect accordingly
                if ($employee['role'] == 'admin') {
                    // Redirect to the admin panel
                    header("Location: ../admin_panel.php");
                    exit();
                } elseif ($employee['role'] == 'manager') {
                    // Redirect to the manager panel
                    header("Location: ../manager_panel.php");
                    exit();
                }
            } else {
                echo "<script>alert('Employee Password is Incorrect');</script>";
                echo "<script>window.location.href ='../admin.php';</script>";
            }
        } else {
            echo "<script>alert('Employee ID does not exist');</script>";
            echo "<script>window.location.href ='../admin.php';</script>";
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the database connection

?>
