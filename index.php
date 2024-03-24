<?php include("server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Haven</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include('header.php')
?>
    <header>
        <h1>WELCOME TO GOURMET HAVEN RESTAURANT.</h1>
        <img src="./public/images/restaurant_logo.jpg" alt="Gourmet Haven Logo" class="curvy-shadow">
    </header>
    <main>
        <section class="restaurant-images">
            <figure>
                <img src="./public/images/interior.jpg" alt="Interior of Gourmet Haven">
                <figcaption>Interior Design</figcaption>
            </figure>
            <figure>
                <img src="./public/images/dish1.jpg" alt="Signature Dish of Gourmet Haven">
                <figcaption>Signature Dish</figcaption>
            </figure>
            <figure>
                <img src="./public/images/exterior.jpg" alt="Exterior of Gourmet Haven">
                <figcaption>Exterior Design</figcaption>
            </figure>  
        </section>
        <section class="restaurant-info">
            <h2><u>About Us</u></h2>
            <p class="text-indent">Gourmet Haven is a cozy, family-owned restaurant located in the heart of the city. We specialize in French cuisine, offering a delightful array of dishes prepared with the finest ingredients and culinary expertise.Our journey began with a passion for culinary excellence and a commitment to providing an unforgettable dining experience. Founded by a team of seasoned chefs and hospitality enthusiasts, Gourmet Haven has become a culinary destination renowned for its innovative cuisine and impeccable service.</p>
            <p class="text-indent">At Gourmet Haven, we believe in sourcing the finest ingredients locally and globally to create dishes that tantalize the taste buds and inspire the senses. Our menu is a celebration of flavors, blending traditional techniques with modern innovation to present dishes that are both sophisticated and comforting. Join us at Gourmet Haven and embark on a culinary adventure that promises to delight, surprise, and leave a lasting impression.</p>
            <h2><u>Our Cuisine</u></h2>
            <p class="text-indent">Indulge in our exquisite French delicacies, from classic Caprese salad to decadent filet mignon. Our menu is carefully crafted, leaving you craving for more.</p>
            <p class="text-indent">From the moment you peruse our menu, you'll be transported on a journey of gastronomic discovery. Start your meal with amazing appetizers, indulge in our chef's specialties for the main course, and save room for dessert, as our chefs work their magic to create decadent treats that satisfy even the most discerning sweet tooth.</p>
            <p class="text-indent">Whether you're a culinary connoisseur or simply seeking a memorable dining experience, Gourmet Haven invites you to savor the flavors of excellence in every bite. Join us and discover why we're more than just a restaurant, we're a destination for epicurean delights.</p>
            <a href="reservation.php" class="btn-reservation">Make a Reservation</a>
            <h2><u>Visit Us</u></h2>
            <p>We are conveniently located at:</p>
            <address>
                0123 Dishui Street<br>
                Shanghai City, Shanghai, China<br>
                Phone: 123-4566-7899<br>
                Email: info@gourmethaven.com
            </address>   
        </section>
    </main>
    <footer>       
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
