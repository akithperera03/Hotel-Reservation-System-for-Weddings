document.addEventListener("DOMContentLoaded", function() {
    // Check if there is an error message from PHP
    const errorMsg = "<?php echo addslashes($error_msg); ?>"; // Escape quotes
    if (errorMsg) {
        alert(errorMsg); // Show the error message in an alert box
    }
});