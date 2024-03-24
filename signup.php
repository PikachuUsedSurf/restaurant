<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Haven | Online Restaurant Reservation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="index.html" class="logo">GOURMET HAVEN</a>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="reservation.html">Reservations</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>
    <header>
        <h1>SIGNUP</h1>
        <img src="./public/images/restaurant_logo.jpg" alt="Gourmet Haven Logo" class="curvy-shadow">
    </header>
    <main>
        <div class="signup-container">
            <h2>Create an Account</h2>
            <form action="signup.php" method="POST"> <!-- Replace "signup.php" with your backend script -->
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
    
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
    
                <label for="Phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Create Password</label>
                <input type="password" id="password" name="password" required>
    
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required><br>
    
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I agree to the <a href="terms.html" target="_blank">Terms of Service</a> and <a href="privacy.html" target="_blank">Privacy Policy</a></label>
    
                <button type="submit">Signup</button>
            </form>
            <p>Already have an account? <a href="login.html">Login</a></p>
        <p>Forgot your password? <a href="password_recovery.html">Recover Password</a></p>
        </div>
    </main>
    <footer>
        <!-- Footer content -->
        <p>Follow us on social media:</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/" class="icon"><img src="./public/images/facebook.png" alt="Facebook"></a>
            <a href="https://twitter.com/" class="icon"><img src="./public/images/twitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/" class="icon"><img src="./public/images/instagram.png" alt="Instagram"></a>
        </div>
        <p>&copy; 2024 Gourmet Haven. All Rights Reserved.</p>
    </footer>
</body>
</html>