<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/header_footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js/login.js" defer></script>
</head>
<body>

    <header>
        <div class="container">
            <div class="logo"> 
                <a href="index.php"><img src="images/logo_1.jpg" id="logoimage" alt="Aurora Bliss Logo"></a>
            </div>
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
            <a href="weddingreservation.php">
              <button type="button" class="btn booking-btn">Booking Request</button>
            </a>
            <div class="user">
                <span>Hello!</span>
                <a href="login.php">Login</a>
            </div>
        </div>
    </header>
    
    <main>
        <section class="login-section">
            <div class="login-box">
                <h1>Login to Your Account</h1>
                <form action="register.php" class="login-form">
                    <div class="input-group">
                        <label for="username">Username <span class="required">*</span></label>
                        <input type="text" id="username" placeholder="Username" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password <span class="required">*</span></label>
                        <input type="password" id="password" placeholder="Password" required>
                        <span class="toggle-password">👁</span>
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
                        <a href="terms.php">Terms & Conditions</a> | <a href="#">Privacy</a>
                    </div>
                </form>
            </div>

            <div class="signup-box">
                <h2>New Here?</h2>
                <p>Sign up and lock in comfort for your big day!</p>
                <a href="register.php" class="btn signup-btn">Sign Up</a>
            </div>
        </section>
    </main>

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

            <div class="subscribe">
                <h3>Subscribe to Our Newsletter</h3>
                <form id="subscribeForm" method="POST" action="">
                    <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                    <button type="submit">Submit</button>
                </form>
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
        </div>
    </footer>

</body>
</html>
