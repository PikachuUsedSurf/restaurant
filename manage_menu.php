<?php

include("server.php");

$sql = "Select name, category, description, price from menu";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Menu</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
</head>
<body>
<nav class="navbar">
        <div class="container">
            <a href="admin.php" class="logo">GOURMET HAVEN</a>
            <ul class="nav-links">
                <li><a href="admin.php">Home</a></li>
            </ul>
        </div>
    </nav>
    <header>
    <img src="./public/images/restaurant_logo.jpg" alt="Gourmet Haven Logo" class="curvy-shadow">
        <h1>Manage Menu</h1>
    </header>
    <main>
    <h2><u>Menu</u></h2>
        <section class="restaurant-info">
            <div class="list-menu">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Dish ID:</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                            // Output HTML row with data from each row in the result set
                            echo "<tr>";
                            echo "<th>" . $i++ . "</th>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['category'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" .  "</td>";
                            echo "</tr>";
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
            <a href="add_menu.php" class="btn-reservation">Add a New Recipe</a>
        </section>
    </main>
    <footer>       
        <p>&copy; 2024 Gourmet Haven. All Rights Reserved.</p>
    </footer>
</body>
</html>