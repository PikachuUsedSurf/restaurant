<?php
// Include the PHP script to connect to the database
include("server.php");

// Define SQL query to select menu items from the database
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Haven | Online Restaurant Reservation</title>
    
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="./css/cart.css"> -->
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
                <li><a href="cart.html">Cart</a></li>
            </ul>
        </div>
    </nav>
    <header>
        <h1>MENU LIST</h1>
    </header>
    <main>
        <!-- Hero section, About section, Call-to-action buttons, etc. -->

        <!--Scrolling texts-->
        <div class="scroll-container">
            <div class="scroll-content">
                <h1>OUR NEW UPCOMING SEASONAL DISHES!</h1>
            </div>
        </div>

        <div class="slideshow-container">
            <div class="slide fade">
                <img src="./public/images/dish1.jpg" alt="Signature Dish 1" class="curvy-image">
                <div class="caption">Signature Dish 1</div>
            </div>
            <div class="slide fade">
                <img src="./public/images/dish2.jpg" alt="Signature Dish 2" class="curvy-image">
                <div class="caption">Signature Dish 2</div>
            </div>
            <div class="slide fade">
                <img src="./public/images/dish3.jpg" alt="Signature Dish 3" class="curvy-image">
                <div class="caption">Signature Dish 3</div>
            </div>
            <!-- Add more slides as needed -->

            <!-- Navigation buttons -->
            <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
            <a class="next" onclick="moveSlide(1)">&#10095;</a>
        </div>

        <!--Menu lists-->
        <?php
        // Check if there are menu items in the result
        if ($result->num_rows > 0) {
            // Loop through each row of menu items
            while ($row = $result->fetch_assoc()) {
                // Output HTML content for each menu item
        ?>
                <section class="menu-category">
                    <h2><?php echo $row["category"]; ?></h2>
                    <div class="menu-item">
                        <img src="./public/images/<?php echo $row["image"]; ?>" alt="<?php echo $row["name"]; ?>" class="curvy-image">

                        <div class="item-details">
                            <h3><?php echo $row["name"]; ?></h3>
                            <p><?php echo $row["description"]; ?></p>
                            <span class="price">Price: $<?php echo $row["price"]; ?></span>
                            <button class="order-button">Order</button>
                        </div>
                    </div>
                </section>
        <?php
            }
        } else {
            // If no menu items found
            echo "No menu items available.";
        }
        ?>

        <!-- Add more menu categories as needed -->
        </div>
        <a href="checkout.html" class="checkout-button">Checkout</a>



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
    <script src="script.js"></script>
</body>

</html>