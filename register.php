<!DOCTYPE html> 
<!-- this is from Sanduni Tharaka branch-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="stylesheet" href="styles/registering.css">
    <script src="js/registering.js"></script>
    
</head>
<body>

    <header>
        <div class="container">
            <div class="logo"> <a href="index.php"><img src="images/logo_1.jpg" id="logoimage"></a></div>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutUs.php">ABOUT US</a></li>
                    <li><a href="ourFeatures.php">OUR FEATURES</a></li>
                    <li><a href="venue.php">VENUE</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contactUs.php">CONTACT US</a></li>
                </ul>
            </nav>
            <div class="user">
                <span>Hello!</span>
                <a href="login.php">Login</a>
            </div>
        </div>
    </header>


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

    <footer>
    <div class="container">
        <div class="logo"> 
            <a href="index.php"><img src="images/logo_1.jpg" id="logoimage" alt="Aurora Bliss Logo"></a>
        </div> 
        <div class="social">
            <a href="https://www.instagram.com"><img src="images/socialmedia/instagram.jpeg" alt="Instagram"></a>
            <a href="https://www.facebook.com"><img src="images/socialmedia/facebook.png" alt="Facebook"></a>
            <a href="https://www.x.com"><img src="images/socialmedia/x.png" alt="X"></a>
            <a href="https://www.linkedin.com"><img src="images/socialmedia/linkedin.png" alt="LinkedIn"></a>
        </div>
        <div class="legal">
            <div class="bottomlinks">
                <p> 
                    <a href="termsAndConditions.php"> Terms and Conditions </a> | 
                    <a href="privacyPolicy.php"> Privacy and Cookies Policy </a> | 
                    <a href="FAQ.php"> FAQ </a> | 
                    <a href="careers.php"> Work with us </a>
                </p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2024 Aurora Bliss. All Rights Reserved.</p>
            <p>Website developed by <a href="developer_info.html">CodeCrafters</a></p>
        </div>
    </div>
</footer>

</body>
</html>
