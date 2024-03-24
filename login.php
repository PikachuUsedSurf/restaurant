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
    $emailOrUsername = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Query the database to check if the user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
    $stmt->bind_param("ss", $emailOrUsername, $emailOrUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User exists, verify password
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Password is correct, redirect to dashboard or profile page
            header("Location: index.php"); // Replace "dashboard.php" with your desired destination
            exit();
        } else {
            // Incorrect password
            header("Location: login.php?error=incorrect_password");
            exit();
        }
    } else {
        // User not found
        header("Location: login.php?error=user_not_found");
        exit();
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
        <h1>LOGIN</h1>
        <img src="./public/images/restaurant_logo.jpg" alt="Gourmet Haven Logo" class="curvy-shadow">
    </header>
    <main>
        <br><br><br><br>
        <div class="login-container">
            <h2>Login</h2>

            <?php if (isset($_GET['error']) && $_GET['error'] === 'user_not_found') : ?>
                <p style="color: red;">User not found. Please check your email or username and try again.</p>
            <?php elseif (isset($_GET['error']) && $_GET['error'] === 'incorrect_password') : ?>
                <p style="color: red;">Incorrect password. Please try again.</p>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <label for="email">Email or Username</label>
                <input type="text" id="email" name="email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                
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
