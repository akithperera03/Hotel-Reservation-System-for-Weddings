<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

$sql = "SELECT * FROM employees";
$result = $connection->query($sql);

if ($result->num_rows > 0){
    while($row = $result -> fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["empID"] . "</td>";
        echo "<td>" . $row["empPSW"] . "</td>";
        echo "<td>" . $row["role"] . "</td>";
        echo "<td>";
        echo "<a href='updateEmp_details.php?employee_id=" . $row['id'] . "' class='action-button'>Update</a>";
        echo "<a href='adminPHP/deleteUserAcc.php?delete_id=" . $row['id'] . "' class='action-button' onclick=\"return confirm('Are you sure you want to delete this user?');\">Delete</a>";
        echo"</td>";
        echo "</tr>";
    }
}
else {
    echo "<tr><td colspan='4'>No records found</td></tr>"; // Handle case with no results
}
?>