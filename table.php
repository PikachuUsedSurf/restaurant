<section class="menu-category">
    <h2>Appetizers</h2>
    <?php
    // Assuming $appetizers is an array of menu items fetched from the database
    foreach ($appetizers as $appetizer) {
        ?>
        <div class="menu-item">
            <img src="<?php echo $appetizer['image']; ?>" alt="<?php echo $appetizer['name']; ?>" class="curvy-image">
            <div class="item-details">
                <h3><?php echo $appetizer['name']; ?></h3>
                <p><?php echo $appetizer['description']; ?></p>
                <span class="price">Price: <?php echo $appetizer['price']; ?></span>
                <button class="order-button">Order</button>
            </div>
        </div>
        <?php
    }
    ?>
</section>

<!-- Repeat the same structure for other menu categories -->
