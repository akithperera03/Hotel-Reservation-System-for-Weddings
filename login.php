<?php include 'header.php'; ?>
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js/login.js" defer></script>
    <main>
        <section class="login-section">
            <div class="login-box">
                <h1>Login to Your Account</h1>
                <form action="register.php" class="login-form">
                    <div class="input-group">
                        <label for="username">Username <span class="required">*</span></label>
                        <input type="text" id="username" placeholder="Username" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password <span class="required">*</span></label>
                        <div class="password-container"> 
                            <input type="password" id="password" placeholder="Password" required>
                            <span class="toggle-password" id="togglePassword">
                            <i class="fa fa-eye"></i> 
                            </span>
                        </div>
                        </div>
                    <div class="options">
                        <label><input type="checkbox"> Remember Me</label>
                        <a href="#" class="forgot-password">Forgot my password</a>
                    </div>
                    <button type="submit" class="btn login-btn">Login</button>
                    <div class="or">OR</div>
                    <button type="button" class="btn google-btn" onclick="window.location.href='https://localhost/IWT-Assignment-Y1S2/configurations/google-login.php'">
                         <i class="fab fa-google"></i> Sign in with Google
                    </button>                 
                    <div class="legal-links"> 
                        <a href="termsAndConditions.php">Terms & Conditions</a> | <a href="privacyPolicy.php">Privacy</a>
                    </div>
                </form>
            </div>

            <div class="signup-box">
                <h2>New Here?</h2>
                <p>Sign up and lock in comfort for your big day!</p>
                <a href="register.php" class="btn signup-btn">Sign Up</a>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>