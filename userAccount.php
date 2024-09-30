<!DOCTYPE html> 
<!-- this is from Sanduni Tharaka1 branch-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="stylesheet" href="styles/userAcc.css">
    <script src="js/userAcc.js"></script>
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

    <div class="container">
        <div class="user-section">
            <div>
                <img src="images/userIcon.png" alt="User Avatar">
                <p>Hello! <strong>Username</strong></p>
                <button>Logout</button>
            </div>
            <div class="alignbtns">
                <button>Dashboard</button>
                <button>Edit your profile</button>
            </div>
        </div>
    
        <div class="info-section">
            <h3>Personal Information</h3>
            <label>Username:</label>
            <input type="text" value="Username" disabled>
            <label>Full Name:</label>
            <input type="text" value="Full Name">
            <label>Email:</label>
            <input type="email" value="email@example.com">
            <label>Country:</label>
            <input type="text" value="Country">
            <label>NIC:</label>
            <input type="text" value="National ID">
            <label>Telephone:</label>
            <input type="tel" value="Phone Number">
            <button>Update</button>
            
        </div>
    
        <div class="password-section">
            <h3>Password and Security</h3>
            <label>Current Password</label>
            <input type="password">
            <label>New Password</label>
            <input type="password" id="newpwd">
            <label>Re-type Password</label>
            <input type="password" id="renewpwd">
            <button>Confirm</button>
        </div>
    </div>















    <footer>
        <div class="container">
            <div class="logo"> <a href="index.php"><img src="images/logo_1.jpg" id="logoimage"></a></div> 
            <div class="social">
            <a href="https://www.instagram.com"><img src="images/socialmedia/instagram.jpeg" alt="Instagram"></a>
                <a href="https://www.facebook.com"><img src="images/socialmedia/facebook.png" alt="Facebook"></a>
                <a href="https://www.x.com"><img src="images/socialmedia/x.png" alt="X"></a>
                <a href="https://www.linkedin.com"><img src="images/socialmedia/linkedin.png" alt="LinkedIn"></a>
            </div>
            <div class="subscribe">
                <input type="email" placeholder="Enter Your Email">
                <button>Submit</button>
            </div>
        </div>
        <div class="legal">
            <div class="bottomlinks">
                <p > <a href="termsAndConditions.php" > Terms and Conditions </a> | <a href="privacyPolicy.php"> Privacy and Cookies Policy </a> |<a href="FAQ.php"> FAQ </a> |<a href="careers.php"> Work with us </a></p> 
            </div>
        </div>
    </footer>

</body>
</html>