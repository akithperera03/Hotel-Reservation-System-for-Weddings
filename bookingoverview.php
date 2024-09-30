<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Overview</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles/bookingoverview.css">
    <script defer src="js/bookingoverview.js"></script>
    <link rel="icon" href="images/icon/icon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo"> 
                <a href="index.php"><img src="images/logo_1.jpg" id="logoimage"></a></div>
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
                <a href="login.php">LogOut</a>
            </div>
        </div>
    </header>
    <main>
    <section class="hero">
                <h1>Booking Overview</h1>
             
    </section>
    <div class="dashboard">
        <div class="profile-section">
            
            <div class="profile-info">
                <div class="username-header">
                    <p>Username</p>
                    <button class="logout-btn">Log Out</button>
                </div>
    
                <div class="profile-picture">
                    <i class="fas fa-user-circle" style="font-size: 80px; color: #ccc;"></i>
                </div>
                <p>Username: John Doe</p>
                <p>User ID: gdf4545r45dfd</p>
                <button class="edit-btn"><i class="fas fa-edit"></i> Edit Account</button>
            </div>
        </div>
        <div class="bookings-section">
            <h2> <span id="dateTime"></span></h2>
            <hr>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Venue</th>
                        <th>Date</th>
                        <th>Guests</th>
                        <th>Payment</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>9690688439</td>
                        <td>John Doe</td>
                        <td>johndoe@gmail.com</td>
                        <td>0719076055</td>
                        <td>Ocean View Resort</td>
                        <td>2024-05-01</td>
                        <td>25</td>
                        <td>LKR 15,000</td>
                        <td><i class="fas fa-clock"></i> Pending</td>  
                    </tr>
                    <tr>
                        <td>0170576055</td>
                        <td>John Doe</td>
                        <td>johndoe@gmail.com</td>
                        <td>0719076055</td>
                        <td>Mountain Peak</td>
                        <td>2024-05-08</td>
                        <td>5</td>
                        <td>LKR 25,000</td>
                        <td><i class="fas fa-check-circle"></i> Approved</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="container">
    
        <section class="guest-section">
            <div class="guest-header">
                <h3>Guest List</h3>
            </div>
            <table class="guest-list">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Guest ID</th>
                        <th>Name</th>
                        <th>NIC Number</th>
                        <th>Order ID</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="guest-list-body">
                <?php
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $database="myreservation";

                    $connection=new mysqli($servername, $username, $password, $database); 

                    if($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    $sql = "SELECT * FROM guestlist";
                    $result = $connection->query($sql);

                    if(!$result){
                        die("Invalid query: " . $connection->error);
                    }

                    while($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>{$row['No']}</td>
                            <td>{$row['GuestID']}</td>
                            <td>{$row['Name']}</td>
                            <td>{$row['NICNumber']}</td>
                            <td>{$row['OrderID']}</td>
                            <td><a href='/myreservation/edit.php?id={$row['No']}'><button class='edit-btn'><i class='fas fa-edit'></i> Edit</button></a></td>
                            <td><a href='/myreservation/delete.php?No={$row['No']}'><button class='delete-btn' id='deleteBtn'><i class='fas fa-trash'></i> Delete</button></a></td>
                        </tr>
                        ";
                    }
                    
                    ?>
            </table>
            <br>
            <a href="addguest.php">
            <button class="add-btn"><i class="fas fa-plus"></i> Add</button>
        </a>
        </section>
    
        <section class="facilities">
            <div class="add-guest">
                <select id="order-id-dropdown">
                    <option value="">Select Order ID</option>
                    <option value="9690688439">9690688439</option>
                    <option value="0170576055">0170576055</option>
                </select>
            </div>
            <ul>
                <li><input type="checkbox" id="music" name="facilities" value="Music and Entertain"> Music and Entertain: LKR 5,000</li><br>
                <li><input type="checkbox" id="room-service" name="facilities" value="Room Service"> 24-Hour Room Service: LKR 1,000</li><br>
                <li><input type="checkbox" id="pool" name="facilities" value="Pool Facility"> Pool Facility: LKR 500</li><br>
                <li><input type="checkbox" id="wifi" name="facilities" value="Free Wireless Internet"> Free Wireless Internet: FREE</li><br>
                <li><input type="checkbox" id="pub" name="facilities" value="Pub"> Pub: FREE</li><br>
                <li><input type="checkbox" id="airport" name="facilities" value="Airport Transfers"> Airport Transfers: LKR 15,000</li><br>
                <li><input type="checkbox" id="laundry" name="facilities" value="Laundry Facility"> Laundry Facility: LKR 1,500</li><br>
                <li><input type="checkbox" id="babysitting" name="facilities" value="Babysitting on Request"> Babysitting on Request: LKR 3,000</li><br>
                <li><input type="checkbox" id="gym" name="facilities" value="GYM"> GYM: FREE</li><br>
                <li><input type="checkbox" id="spa" name="facilities" value="Onsite Spa"> Onsite Spa: LKR 4,500</li><br>
            </ul>
            <div class="footer-buttons">
                <button>Add</button>
                <button id="proceed-to-pay"><i class="fas fa-credit-card"></i>  Proceed to Pay</button>
            </div>
        </section>
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
