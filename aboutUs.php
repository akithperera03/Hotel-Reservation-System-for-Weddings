<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Aurora Bliss</title>
    <link rel="stylesheet" href="styles/aboutus.css">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <script src="js/aboutus.js" defer></script>
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
                <h1>About Aurora Bliss</h1>
                <p>Welcome to <strong>Aurora Bliss</strong>, a premier luxury hotel specializing in creating memorable weddings and events. Established in 2010, Aurora Bliss has become a symbol of excellence in hospitality, offering world-class services in a serene, romantic setting. From venue reservations to tailored wedding services, we are committed to making every event perfect.</p>
            </div>
        </section>
    <div class="corporate-section">
        <h2>Board of Management</h2>
        <p>Our leadership team ensures that Aurora Bliss remains a top destination for weddings and special events:</p>
        <div class="board-members">
            <div class="board-member">
                <img src="images/managment/Kasun Perera.jpg" alt="Kasun Perera - CEO" class="member-photo">
                <div class="member-info">
                    <h3>Kasun Perera</h3>
                    <p><strong>CEO:</strong> With over 20 years in hospitality management, Kasun leads our vision of world-class service and guest satisfaction.</p>
                </div>
            </div>
            <div class="board-member">
                <img src="images/managment/Nadeeka Wijesinghe.jpg" alt="Nadeeka Wijesinghe - CFO" class="member-photo">
                <o class="member-info">
                    <h3>Nadeeka Wijesinghe</h3>
                    <p><strong>CFO:</strong> Nadeeka oversees our financial strategies, ensuring the growth and sustainability of our brand.</p>
            </div>
                <div class="board-member">
                <img src="images/managment/Amila Fernando.jpg" alt="Amila Fernando - COO" class="member-photo">
                <div class="member-info">
                    <h3>Amila Fernando</h3>
                    <p><strong>COO:</strong> Amila Fernando day-to-day operations, focusing on the seamless execution of events and services.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="milestones-section">
        <h2>Milestones</h2>
        <p>Aurora Bliss has achieved many milestones since its inception, reflecting our dedication to excellence:</p>
        <ul>
            <li><strong>2010:</strong> Aurora Bliss opens its doors and hosts its first wedding.</li>
            <li><strong>2015:</strong> Expanded to include a luxury spa and honeymoon suites.</li>
            <li><strong>2018:</strong> Recognized as one of the top wedding venues in the region, receiving the "Best Hospitality Award."</li>
            <li><strong>2021:</strong> Launched our exclusive online reservation system for weddings and special events.</li>
            <li><strong>2023:</strong> Completed a major renovation, introducing new state-of-the-art event facilities.</li>
        </ul>
    </div>

    <div class="more-info-section">
        <button class="learn-more-btn" onclick="showMore()">Learn More About Our History</button>
        <p id="more-info" style="display: none;">Founded by hospitality enthusiasts, Aurora Bliss was built on the belief that every wedding should be unique and unforgettable. Over the years, we've hosted over 1,000 weddings, gaining a reputation for unparalleled service and attention to detail. Our mission is to continue offering personalized, luxurious experiences that leave a lasting impression on our guests.</p>
    </div>
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
