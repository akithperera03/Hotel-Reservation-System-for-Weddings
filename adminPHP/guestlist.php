<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';


$sql = "SELECT * FROM guests ORDER BY orderid DESC"; // Assuming 'reservation_id' is the primary key
$result = $connection->query($sql);

// Check if there are any reservations
if ($result->num_rows > 0) {
    // Table header
    echo "<tr>
    <th>Guest Name</th>
    <th>NIC Number</th>
    <th>Order ID</th>
        </tr>";

    // Fetch and display each reservation record
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['guest_name']}</td>
                <td>{$row['nic_number']}</td>
                <td>{$row['orderID']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No guests found.</td></tr>";
}

