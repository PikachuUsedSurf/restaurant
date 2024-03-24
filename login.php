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
        <h1>LOGIN</h1>
        <img src="./public/images/restaurant_logo.jpg" alt="Gourmet Haven Logo" class="curvy-shadow">
    </header>
    <main>
        <br><br><br><br>
        <div class="login-container">
            <h2>Login</h2>
            <form action="login.php" method="POST"> <!-- Replacing "login.php" with the backend script -->
                <label for="email">Email or Username</label>
                <input type="text" id="email" name="email" required>
    
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required><br>
    
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
    
                <button type="submit">Login</button>
            </form>
            <p>Forgot your password? <a href="password_recovery.html">Recover Password</a></p>
            <p>Don't have an account? <a href="signup.html">Signup</a></p>
        </div>
        <br><br><br><br>
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