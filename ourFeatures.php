<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/features.css">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js/features.js" defer></script>
    <link rel="icon" href="images/icon/icon.ico" type="image/x-icon">
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
    <section class="hero">
            <div class="container">
                <h1>Our Features</h1>
                <p>Discover the countless opportunities that come with holding your event at Aurora Bliss. We're committed to making your event genuinely unique with its remarkable features and making your event truely unforgettable.</p>
            </div>
        </section>
        <section class="features">
    <!-- Feature 1: Expansive Ballroom -->
    <div class="feature-item">
        <img src="images/features/ballroom.jpg" alt="Ballroom with elegant setup">
        <div class="feature-info">
            <h3>Expansive Ballroom and Event Spaces</h3>
            <p><strong>Large flexible ballroom space</strong>: We offer a spacious and elegant setting with customizable lighting and high interior decor.</p>
            <p><strong>Multiple configurations</strong>: Accommodates up to 1500 guests in banquet style and 2000 in theater style.</p>
            <p><strong>Pre-event area</strong>: Special areas for registrations, cocktail parties, and meetings.</p>
            <button class="booking-btn1" onclick="submitBooking()" aria-label="Request booking for ballroom">Booking Request</button>
        </div>
    </div>

    <!-- Feature 2: Luxury Accommodations -->
    <div class="feature-item">
        <img src="images/features/room.jpg" alt="Luxury room with balcony view">
        <div class="feature-info">
            <h3>Luxury Accommodations and Exclusive Rooms</h3>
            <p><strong>Luxury amenities</strong>: We offer rooms with private balconies, terraces, and full facilities.</p>
            <p><strong>VIP services</strong>: Presidential suites available for VIP guests.</p>
            <p><strong>Exclusive green rooms</strong>: Comfortable, relaxing spaces tailored to your needs.</p>
            <button class="booking-btn1" onclick="submitBooking()" aria-label="Request booking for luxury room">Booking Request</button>
        </div>
    </div>

    <!-- Feature 3: Catering and Culinary Excellence -->
    <div class="feature-item">
        <img src="images/features/buffet.jpg" alt="Buffet setup">
        <div class="feature-info">
            <h3>Catering and Culinary Excellence</h3>
            <p>Experience a wide range of culinary delights with renowned chefs, providing specialized options to satisfy dietary needs and preferences.</p>
            <p><strong>Michelin-Starred restaurant</strong>: On-site dining experience and bar.</p>
            <button class="booking-btn1" onclick="submitBooking()" aria-label="Request booking for catering">Booking Request</button>
        </div>
    </div>

    <!-- Feature 4: Expert Event Planning -->
    <div class="feature-item">
        <img src="images/features/event.jpeg" alt="Event planning">
        <div class="feature-info">
            <h3>Expert Event Planning</h3>
            <p><strong>Customizable packages</strong>: A variety of packages to create the perfect wedding experience.</p>
            <p><strong>Professional event coordinators</strong>: A team ready to assist in making your day unforgettable.</p>
            <button class="booking-btn1" onclick="submitBooking()" aria-label="Request event planning service">Booking Request</button>
        </div>
    </div>

    <!-- Feature 5: Wellness Center and Luxury Spa -->
    <div class="feature-item">
        <img src="images/features/spa.jpeg" alt="Spa and wellness center">
        <div class="feature-info">
            <h3>Wellness Center and Luxury Spa</h3>
            <p>We offer fitness centers, full-service spas, pool areas, and leisure sports activities to rejuvenate guests.</p>
            <button class="booking-btn1" onclick="submitBooking()" aria-label="Request spa and wellness services">Booking Request</button>
        </div>
    </div>

    <!-- Feature 6: Ample and Valet Parking -->
    <div class="feature-item">
        <img src="images/features/carpark.jpg" alt="Parking lot">
        <div class="feature-info">
            <h3>Ample and Valet Parking</h3>
            <p>Abundant on-site parking is available, including valet services for your convenience.</p>
            <button class="booking-btn1" onclick="submitBooking()" aria-label="Request parking service">Booking Request</button>
        </div>
    </div>

    <!-- Feature 7: Scenic Surroundings -->
    <div class="feature-item">
        <img src="images/features/pool.jpg" alt="Pool with scenic surroundings">
        <div class="feature-info">
            <h3>Scenic Surroundings</h3>
            <p><strong>Beach access and waterfront view</strong>: Enjoy private beach access with watersports, sunbeds, and cabanas, plus a picturesque waterfront.</p>
            <p><strong>Serene garden setting</strong>: Ideal for outdoor functions and gatherings.</p>
            <button class="booking-btn1" onclick="submitBooking()" aria-label="Request scenic surroundings services">Booking Request</button>
        </div>
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