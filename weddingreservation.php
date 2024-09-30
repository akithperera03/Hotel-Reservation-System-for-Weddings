<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/weddingreservation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

    <header>
        <div class="container">
            <div class="logo"> 
                <a href="index.php"><img src="images/logo_1.jpg" id="logoimage"></a>
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
            <div class="user">
                <span>Hello!</span>
                <a href="login.php">Login</a>
            </div>
        </div>
    </header>

<body>
    <div class="guest">
        <div class="image-container">
            <img src="images/stickers/wedding.png">
        </div>
        <div class="form-container">
            <h2>Wedding Reservation</h2>
            <form >
                <label for="Name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter name">

                <label for="Email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter email">

                <label for="Contact-No">Contact No:</label>
                <input type="tel" id="contact-no" name="contact-no" required placeholder="Enter contact no">

                <label for="venue">Venue:</label>
                <select id="venue" name="venue" required placeholder="venue">
                <option value="" disabled selected>Select Venue</option>
                <option value="Grand Hall">Grand Hall</option>
                <option value="Ocean View">Ocean View</option>
                <option value="Garden Plaza">Garden Plaza</option>
                <option value="Mountain Peak">Mountain Peak</option>
                </select>

                <label for="wedding-date">Date:</label>
                <input type="date" id="wedding-date" name="wedding-date" required placeholder="wedding date">

                <label for="guests">Number of Guests:</label>
                <input type="number" id="guests" name="guests" min="1" required placeholder="number of guests">

                <button type="submit" class="submit-btn">Submit</button>
                
            </form>
        </div>
    </div>

<br><br>
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
