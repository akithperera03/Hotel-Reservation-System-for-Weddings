<?php
if (!$connection || !$connection->ping()) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';
}

// SQL query to fetch payment details
$sql = "SELECT order_id, user_id, card_type, card_number, expiry_date, 
        security_code, address, city, state, country, cost, created_at 
        FROM payments";
$result = $connection->query($sql);

// Check if there are results and output them
if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['order_id']}</td>
                <td>{$row['user_id']}</td>
                <td>{$row['card_type']}</td>
                <td>{$row['card_number']}</td>
                <td>{$row['expiry_date']}</td>
                <td>{$row['security_code']}</td>
                <td>{$row['address']}</td>
                <td>{$row['city']}</td>
                <td>{$row['state']}</td>
                <td>{$row['country']}</td>
                <td>LKR {$row['cost']}</td>
                <td>{$row['created_at']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='12'>No payment records found.</td></tr>";
}

// Close the connection

?>
