<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Aurora Bliss</title>
    <link rel="stylesheet" href="styles/header_footer.css">
    <link rel="stylesheet" href="styles/careers.css">
    <script src="js/index.js" defer></script>
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
                <button type="button" class="booking-btn">Booking Request</button>
              </a>
            <div class="user">
                <span>Hello!</span>
                <a href="login.php">Login</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="careers-hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Join Our Team</h1>
                    <p>We are looking for talented and passionate individuals to create unforgettable wedding experiences at Aurora Bliss.</p>
                </div>
            </div>
        </section>

        <!-- Open Positions Section -->
        <section class="open-positions">
            <div class="container">
                <h2>Current Openings</h2>
                <div class="position-list">
                    <div class="position">
                        <img src="images/careers/Wedding-Planner.jpg" alt="Wedding Planner Icon">
                        <h3>Wedding Planner</h3>
                        <p>Join our team of experts in planning and managing weddings to perfection.</p>
                        <a href="mailto:hr@aurorabliss.com?subject=Application for Wedding Planner" class="apply-button">Apply Now</a>
                    </div>
                    <div class="position">
                        <img src="images/careers/chef1.jpg" alt="Chef Icon">
                        <h3>Chef</h3>
                         <p>Prepare exceptional meals for our weddings and events. Requires experience in fine dining, menu planning, and kitchen management.</p>
                         <a href="mailto:hr@aurorabliss.com?subject=Application for Chef" class="apply-button">Apply Now</a>                      
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Work With Us Section -->
        <section class="why-work-with-us">
            <div class="container">
                <div class="content-image-wrapper">
                    <div class="content">
                        <h2>Why Work With Us</h2>
                        <p>We offer a dynamic work environment, where every day brings new challenges and opportunities. Join our team to be part of something special and rewarding.</p>
                    </div>
                    <img src="images/careers/staff.jpeg" alt="Company Culture" class="section-image">
                </div>
            </div>
        </section>

        <!-- Employee Testimonials Section -->
        <section class="employee-testimonials">
            <div class="container">
                <h2>What Our Team Says</h2>
                <div class="testimonial-list">
                    <div class="testimonial">
                        <img src="images/careers/welcoming-hotel.webp" alt="Thaniya De Silva" class="testimonial-image">
                        <p>"Working at Aurora Bliss has been a dream. The team is supportive, and the work is truly fulfilling."</p>
                        <p class="author">- Thaniya De Silva, Manager</p>
                    </div>
                    <div class="testimonial">
                        <img src="images/careers/chef2.jpg" alt="Indika Wijesinghe" class="testimonial-image">
                        <p>"Every event is unique, and the joy on the faces of our clients makes all the hard work worth it."</p>
                        <p class="author">- Indika Wijesinghe, Executive Chef </p>
                    </div>
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
