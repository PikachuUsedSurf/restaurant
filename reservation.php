<?php include("server.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gourmet Haven | Online Restaurant Reservation</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a href="index.html" class="logo">GOURMET HAVEN</a>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="reservation.html">Reservations</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header>
        <img src="./public/images/restaurant_logo.jpg" alt="Gourmet Haven Logo" class="curvy-shadow" />
        <h1>MAKE A RESERVATION</h1>
    </header>
    <main>
        <!-- Hero section, About section, Call-to-action buttons, etc. -->
        <div class="reservation-form">
            <h2>Reservation Details</h2>
            <form action="submit_reservations.php" method="post">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required />

                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required />

                <label for="guests">Number of Guests:</label>
                <input type="number" id="guests" name="guests" min="1" required />

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required />

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required />

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />

                <label for="requests">Special Requests:</label>
                <textarea id="request" name="special_request" rows="4"></textarea>

                <button type="submit">Submit Reservation</button>
            </form>
        </div>
    </main>
    <footer>
        <!-- Footer content -->
        <p>Follow us on social media:</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/" class="icon"><img src="./public/images/facebook.png"
                    alt="Facebook" /></a>
            <a href="https://twitter.com/" class="icon"><img src="./public/images/twitter.png" alt="Twitter" /></a>
            <a href="https://www.instagram.com/" class="icon"><img src="./public/images/instagram.png"
                    alt="Instagram" /></a>
        </div>
        <p>&copy; 2024 Gourmet Haven. All Rights Reserved.</p>
    </footer>
</body>

</html>