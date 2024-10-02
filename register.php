<?php include 'header.php'; ?>
    <title>Register</title>
    <link rel="stylesheet" href="styles/registering.css">
    <script src="js/registering.js"></script>
    <div class="form-container">
        <h2>SIGN UP</h2>
        <form action="#" onsubmit="return checkPassword()">
            <input type="text" name="fullname" placeholder="Full Name">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" id="pwd" placeholder="Password" required>
            <input type="password" name="repassword" id="repwd" placeholder="Re-type Password" required>
            
            <div class="terms">
                <h3>Terms and Conditions</h3>
                <p>By using Aurora Bliss, you agree to our terms and conditions. Reservations are non-transferable and subject to availability.
                    Cancellations must be made 30 days in advance for a full refund. 
                    We reserve the right to modify services and prices. 
                    Please read our full terms for additional details and policies.</p>
            </div>

            <label>
                <input type="checkbox" name="terms" id="acceptTerms" onclick="enableButton()" required> I accept all Terms and Conditions
            </label>

            <button type="submit" id="submitBtn" value="SUBMIT" disabled>Signup</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
    <?php include 'footer.php'; ?>