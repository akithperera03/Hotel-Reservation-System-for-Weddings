<?php include 'header.php'; ?>
<title>Login</title>
<link rel="stylesheet" href="styles/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="js/login.js" defer></script>
<main>
    <section class="login-section">
        <div class="login-box">
            <h1>Login to Your Account</h1>
            <form action="login.php" method="POST" class="login-form">
                <div class="input-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password <span class="required">*</span></label>
                    <div class="password-container"> 
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <span class="toggle-password" id="togglePassword">
                        <i class="fa fa-eye"></i> 
                        </span>
                    </div>
                </div>
                <div class="options">
                    <label><input type="checkbox"> Remember Me</label>
                    <a href="#" class="forgot-password">Forgot my password</a>
                </div>
                <button type="submit" class="btn login-btn">Login</button>
                <div class="or">OR</div>
                <button type="button" class="btn google-btn" onclick="window.location.href='https://localhost/IWT-Assignment-Y1S2/configurations/google-login.php'">
                     <i class="fab fa-google"></i> Sign in with Google
                </button>                 
                <div class="legal-links"> 
                    <a href="termsAndConditions.php">Terms & Conditions</a> | <a href="privacyPolicy.php">Privacy</a>
                </div>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Database connection
                require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

                // Get email and password from the form
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Prepare and bind
                $stmt = $connection->prepare("SELECT * FROM users WHERE userEmail = ?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                // Check if the user exists
                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();

                    // Verify the password directly (without hashing)
                    if ($password === $user['userPSW']) { // Direct comparison
                        // Start the session and set user details
                        session_start();
                        $_SESSION['user_id'] = $user['userID']; // Assuming there's a 'userID' column
                        $_SESSION['user_email'] = $user['userEmail'];
                        $_SESSION['user_name'] = $user['userName']; // Make sure 'userName' is the correct column name
                        
                        // Debug output
                        echo '<pre>';
                        print_r($_SESSION); // Check all session variables
                        echo '</pre>';

                        header("Location: bookingoverview.php"); // Redirect to a dashboard or home page
                        exit();
                    } else {
                        echo "<p style='color: red;'>Incorrect password. Please try again.</p>";
                    }
                } else {
                    echo "<p style='color: red;'>No user found with that email.</p>";
                }

                $stmt->close();
                $connection->close();
            }
            ?>
        </div>

        <div class="signup-box">
            <h2>New Here?</h2>
            <p>Sign up and lock in comfort for your big day!</p>
            <a href="register.php" class="btn signup-btn">Sign Up</a>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>
