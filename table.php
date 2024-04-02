<?php
// Assuming you have already established a database connection

// Fetch items belonging to the "Appetizers" category
$category = "Appetizers";
$sql = "SELECT * FROM menu_items WHERE category = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$category]);
$appetizers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php 
$category = "maincourses";
$sql = "SELECT * FROM menu_items WHERE catergory = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$category]);
$maincourses = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
$category = "desserts";
$sql = "SELECT * FROM menu_items WHERE category = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$category]);
$desserts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="menu-category">
    <h2>Appetizers</h2>
    <?php
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
