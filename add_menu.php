<?php
include("server.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields
    $errors = array();

    // Validate name
    $name = $_POST["name"];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    // Validate Category
    $category = $_POST["category"];
    if (($category)=='none') {
        $errors[] = "Category is required.";
    }

    // Validate price
    $price = $_POST["price"];
    if (empty($price)) {
        $errors[] = "Price is required.";
    }

    // Validate special request (optional)
    $description = $_POST["description"];

    // Handle file upload
    $image = $_FILES["image"]["name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    } else {
        $errors[] = "File is not an image.";
    }

    // If there are no errors, insert menu data into database
    if (empty($errors)) {
        // Insert data into database
        $sql = "INSERT INTO menu (name, category, description, price, image) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssis", $name, $category, $description, $price, $image);
        $stmt->execute();

        // Upload image file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
        } else {
            $errors[] = "Sorry, there was an error uploading your file.";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();

        // Redirect to a thank you page or display a success message
        header("Location: manage_menu.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Haven | Online Restaurant Reservation</title>
    <link rel="stylesheet" href="./styles.css">
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
        <h1>Add Menu</h1>
        
    </header>
    <main>
        <!-- Hero section, About section, Call-to-action buttons, etc. -->
        <div class="reservation-form">
            <h2>Menu Details</h2>
            <form action="add_menu.php" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" placeholder="Enter menu description"></textarea>
                
                <label for="category">Category:</label>
                <select name="category" id="category">
                    <option value="">Choose One</option>
                    <option value="appetizer">Appetizer</option>
                    <option value="main_dish">Main Dish</option>
                    <option value="dessert">Dessert</option>
                </select>
                
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>
                
                <label for="image">Images:</label>
                <input type="file" id="image" name="image" required>
                
                <button type="submit">Add Menu</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Gourmet Haven. All Rights Reserved.</p>
    </footer>
</body>
</html>