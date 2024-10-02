<?php
// logout.php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: ../admin.php"); // Change this to your login page path
exit();
?>
