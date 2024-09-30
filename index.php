<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/stylesheet.css">
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
        <section class="hero">
            <div class="container">
                <h1>The Art of Celebrating Love</h1>
                <p>We Bring Your Wedding Fantasies to Life with Unmatched Elegance</p>
            </div>
        </section>

        <section class="featured-weddings">
            <div class="container">
                <h2>Featured Weddings by us...</h2>
                <div class="wedding-list">
                    <div class="wedding">
                        <a href="images/featuredWeddings/wedding1.jpg">
                            <img src="images/featuredWeddings/wedding1.jpg" alt="Elegant Wedding Setup 1">
                        </a>
                    </div>
                    <div class="wedding">
                        <a href="images/featuredWeddings/wedding2.jpg">
                            <img src="images/featuredWeddings/wedding2.jpg" alt="Elegant Wedding Setup 2">
                        </a>
                    </div>
                    <div class="wedding">
                        <a href="images/featuredWeddings/wedding3.jpeg">
                            <img src="images/featuredWeddings/wedding3.jpeg" alt="Elegant Wedding Setup 3">
                        </a>
                    </div>
                    <div class="wedding">
                        <a href="images/featuredWeddings/wedding4.jpeg">
                            <img src="images/featuredWeddings/wedding4.jpeg" alt="Elegant Wedding Setup 4">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="most-reviewed">
            <div class="container">
                <h2>Most reviewed venues...</h2>
                <div class="venue-list">
                    <div class="venue">
                        <img src="images/venues/venue1.jpeg" alt="Grand Hall Venue">
                        <h3>Grand Hall</h3>
                        <p>Rating: ⭐⭐⭐⭐ 4.5</p>
                    </div>
                    <div class="venue">
                        <img src="images/venues/venue2.jpeg" alt="Ocean View Resort Venue">
                        <h3>Ocean View Resort</h3>
                        <p>Rating: ⭐⭐⭐⭐⭐ 4.8</p>
                    </div>
                    <div class="venue">
                        <img src="images/venues/venue3.jpeg" alt="Garden Plaza Venue">
                        <h3>Garden Plaza</h3>
                        <p>Rating: ⭐⭐⭐⭐ 4.4</p>
                    </div>
                    <div class="venue">
                        <img src="images/venues/venue4.jpeg" alt="Mountain Peak Venue">
                        <h3>Mountain Peak</h3>
                        <p>Rating: ⭐⭐⭐⭐⭐ 4.9</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="key-facilities">
            <div class="container">
                <h2>Key Facilities</h2>
                <div class="facility-list">
                    <div class="facility">
                        <a href="images/facilities/catering.jpeg">
                            <img src="images/facilities/catering.jpeg" alt="Luxurious Catering Service">
                        </a>
                        <h3>Catering</h3>
                    </div>
                    <div class="facility">
                        <a href="images/facilities/bar.jpeg">
                            <img src="images/facilities/bar.jpeg" alt="Luxurious Bar Facility">
                        </a>
                        <h3>Bar</h3>
                    </div>
                    <div class="facility">
                        <a href="images/facilities/pool.jpeg">
                            <img src="images/facilities/pool.jpeg" alt="Pool Facility">
                        </a>
                        <h3>Pool</h3>
                    </div>
                    <div class="facility">
                        <a href="images/facilities/dj.jpeg">
                            <img src="images/facilities/dj.jpeg" alt="Entertainment Facility with DJ">
                        </a>
                        <h3>Entertainment</h3>
                    </div>
                    <div class="facility">
                        <a href="images/facilities/babysitting.jpeg">
                            <img src="images/facilities/babysitting.jpeg" alt="Babysitting Facility">
                        </a>
                        <h3>Babysitting</h3>
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
