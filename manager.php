<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/manager.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js/login.js" defer></script>
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
        <main class = "dashboard main">
            <section class="manager-section">
                <div class="manager-profile">
                    <img src="images/manager-avatar.jpg" alt="Manager Avatar" class="manager-avatar">
                    <div class="manager-info">
                        <p>Employee Name: John Doe</p>
                        <p>Employee ID: gdf4545dfd</p>
                    </div>
                    <button class="btn logout-btn">Log Out</button>
                </div>
            </section>
        
            <section class="reservation-section">
                <h2>Reservation Requests</h2>
                <table class="reservation-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Actions</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Janice Monahan</td>
                            <td>2024-05-01</td>
                            <td>Janice_Monahan@yahoo.com</td>
                            <td>Port Beulah, Lowa 90719, USA</td>
                            <td>
                                <button class="action-btn approve-btn">✓</button>
                                <button class="action-btn reject-btn">✕</button>
                            </td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <tr>
                                <td>Rollin Fadel</td>
                                <td>2024-05-08</td>
                                <td>Rollin_Fadel@gmail.com</td>
                                <td>Lake Matilda, Tenessee 74062, USA</td>
                                <td>
                                    <button class="action-btn approve-btn">✓</button>
                                    <button class="action-btn reject-btn">✕</button>
                                </td>
                                <td>Approved</td>
                            </tr>
                            <tr>
                                <td>Lera Stroman</td>
                                <td>2024-06-30</td>
                                <td>Lera_Stroman3@gmail.com</td>
                                <td>Vicentaview, Mississippi 47576 9339, USA</td>
                                <td>
                                    <button class="action-btn approve-btn">✓</button>
                                    <button class="action-btn reject-btn">✕</button>
                                </td>
                                <td>Cancled</td>
                            </tr>
                        
                    </tbody>
                </table>
            </section>
        
            <section class="employee-section">
                <h2>Employee List</h2>
                <table class="employee-table">
                    <thead>
                        <tr>
                            <th>Emp No</th>
                            <th>Emp Name</th>
                            <th>Role</th>
                            <th>Assigned Task</th>
                            <th>Availability</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Samantha Perera</td>
                            <td>Front Desk Supervisor</td>
                            <td>Check-in/Check-out</td>
                            <td>Available (9:00 AM - 5:00 PM)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ravi Fernando</td>
                            <td>Coordinator</td>
                            <td>Corporate Conference Setup</td>
                            <td>Available (1:00 PM - 9:00 PM)</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lakshmi Wijesinghe</td>
                            <td>Housekeeping Manager</td>
                            <td>Inventory Management</td>
                            <td>Available (7:00 AM - 3:00 PM)</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td> Nimal De Silva</td>
                            <td>Catering Supervisor</td>
                            <td>Banquet Preparation</td>
                            <td>Oncall (Flexible Hours)</td>
                        </tr>

                    </tbody>
                </table>
            </section>
    
            <section class="summary-section">
                <div class="stats-summary">
                    <p>Total Bookings: 56</p>
                    <p>Total Revenue: LKR 1,500,000</p>
                    <p>Pending Tasks: 2</p>
                    <p>Available Rooms: 15</p>
                    <p>Currently On Duty: 15</p>
                    <p>On Leave or Off-Duty: 2</p>
                </div>
        
                <div class="alerts">
                    <h3>Alerts</h3>
                    <ul>
                        <li>Low Inventory Warning: Housekeeping Supplies</li>
                        <li>Guest Wi-Fi Connectivity Issues</li>
                        <li>System Update Available</li>
                    </ul>
                    <button class="btn clear-btn">Clear All</button>
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

