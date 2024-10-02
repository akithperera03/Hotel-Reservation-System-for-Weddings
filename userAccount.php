<?php include 'header.php'; ?>
    <title>Aurora Bliss</title>
       <link rel="stylesheet" href="styles/userAcc.css">
    <script src="js/userAcc.js"></script>
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
    <?php include 'footer.php'; ?>