<?php
// Database connection details (replace with your own)
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "menu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Initialize error variable
$error = '';

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data 
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $userPassword = isset($_POST['password']) ? $_POST['password'] : '';

    // IMPORTANT: Hash the password for security 
    $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

    // Prepare SELECT statement to check for duplicate email
    $checkStmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    // Check if email already exists
    if ($result->num_rows > 0) {
        // Email already exists
        $error = "Email already exists. Please use a different email.";
    } else {
        // No duplicate email found, proceed with the INSERT query
        $stmt = $conn->prepare("INSERT INTO users (fullname, email, phone, username, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fullname, $email, $phone, $username, $hashedPassword);

        // Execute the statement
        if ($stmt->execute()) {
            // Success! 
            header("Location: index.php"); // Redirect on success
            exit();
        } else {
            // Handle other errors
            $error = "An error occurred. Please try again later.";
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the connection
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Haven | Online Restaurant Reservation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include('header.php')
?>
    <header>
        <h1>SIGNUP</h1>
        <img src="./public/images/restaurant_logo.jpg" alt="Gourmet Haven Logo" class="curvy-shadow">
    </header>
    <?php if (!empty($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
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