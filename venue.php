<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/venues.css">
    <link rel="stylesheet" href="styles/header_footer.css">
    <script src="js/venues.js" defer></script>
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
 <!-- Video Section -->
 <section class="venue-video">
        <video autoplay muted loop id="venueVideo">
            <source src="videos/Aurora_Bliss_intro.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay-text">
            <h1>Explore Our Stunning Venues</h1>
            <button id="scrollButton">View Venues</button> <!-- Scroll Button -->
        </div>
    </section>

    <!-- Venues Section -->
    <section class="venue-gallery" id="venues">
        <div class="container">
            <h2>Our Venues</h2>
            <div class="venue-locations">
                <div class="venue" data-description="A stunning beachside location for unforgettable weddings." data-image="images/locations/beachFront.jpg">
                    <img src="images/locations/beachFront.jpg" alt="Beachfront Paradise">
                    <h3>Beachfront Paradise</h3>
                </div>
                <div class="venue" data-description="A serene garden setting for intimate gatherings." data-image="images/locations/GardenOasis.jpg">
                    <img src="images/locations/GardenOasis.jpg" alt="Garden Oasis">
                    <h3>Garden Oasis</h3>
                </div>
                <div class="venue" data-description="A luxurious ballroom, perfect for grand celebrations." data-image="images/locations/LuxuryBallroom.jpg">
                    <img src="images/locations/LuxuryBallroom.jpg" alt="Luxury Ballroom">
                    <h3>Luxury Ballroom</h3>
                </div>
                <div class="venue" data-description="A rooftop terrace with a breathtaking view of the city." data-image="images/locations/rooftop.jpg">
                    <img src="images/locations/rooftop.jpg" alt="Rooftop Terrace">
                    <h3>Rooftop Terrace</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Image and Description -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="caption"></div>
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
