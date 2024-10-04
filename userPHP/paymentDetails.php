<?php
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM payments WHERE user_id = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<h2>Payment Details</h2>

<table>
    <tr>
        <th>Order ID</th>
        <th>Amount</th>
        <th>Card Number</th>
        <th>Expire Date</th>
    </tr>
    <?php while ($payment = $result->fetch_assoc()) { ?>
        <tr>
        <td><?php echo $payment['order_id']; ?></td>
        <td><?php echo $payment['Amount']; ?></td>
            <td><?php echo $payment['card_number']; ?></td>
            <td><?php echo $payment['expiry_date']; ?></td>
        </tr>
    <?php } ?>
</table>

<?php
$stmt->close();
?>
