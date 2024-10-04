<?php
// Include database configuration
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

// SQL query to fetch all wedding reservations
$sql = "SELECT * FROM wedding_reservations ORDER BY orderid DESC"; // Assuming 'reservation_id' is the primary key
$result = $connection->query($sql);

// Check if there are any reservations
if ($result->num_rows > 0) {
    // Table header
    echo "<tr>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact No</th>
            <th>Venue</th>
            <th>Wedding Date</th>
            <th>Number of Guests</th>
            <th>Order Date</th>
        </tr>";

    // Fetch and display each reservation record
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['orderID']}</td>
                <td>{$row['userID']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['contact_no']}</td>
                <td>{$row['venue']}</td>
                <td>{$row['wedding_date']}</td>
                <td>{$row['guests']}</td>
                <td>{$row['reservation_date']}</td>
                
              </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No reservations found.</td></tr>";
}

// Close the connection

?>
