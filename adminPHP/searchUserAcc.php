<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="../styles/admin_login.css">
    <link rel="stylesheet" href="../styles/search.css">
    <link rel="icon" href="../images/icon/icon.ico" type="image/x-icon">
</head>
<header>
    <div class="container">
        <h1>Aurora Bliss</h1>
    </div>
</header>
<body>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

// Get the search term from the URL
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Prepare the SQL statement to search for users
$sql = "SELECT * FROM users WHERE userName LIKE ? OR userID LIKE ?";
$stmt = $connection->prepare($sql);
$likeTerm = "%" . $searchTerm . "%";
$stmt->bind_param("ss", $likeTerm, $likeTerm);
$stmt->execute();
$result = $stmt->get_result();

// Check if results were found
if ($result->num_rows > 0) {
    echo "<h1>Search Results for: " . htmlspecialchars($searchTerm) . "</h1>";
    echo "<table>";
    echo "<tr><th>User ID</th><th>Username</th><th>Password</th></tr>";

    // Output data for each user found
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["userID"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["userName"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["userPSW"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<h1>No results found for: " . htmlspecialchars($searchTerm) . "</h1>";
}

// Close the statement and connection
$stmt->close();
$connection->close();
?>

<!-- Optional: Add a link to go back to the admin panel -->
<a href="../admin_panel.php" class ="back">⬅️ Back to Admin Panel</a>
</body>
<footer>
    <div class="container">
        <p>&copy; 2024 Aurora Bliss. All rights reserved.</p>
    </div>
</footer>
</html>