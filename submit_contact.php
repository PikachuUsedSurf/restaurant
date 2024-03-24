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

    // Validate email
    $email = $_POST["email"];
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate subject
    $subject = $_POST["subject"];
    if (empty($subject)) {
        $errors[] = "Subject is required.";
    }

    // Validate message
    $message = $_POST["message"];
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    

    // If there are no errors, insert reservation data into database
    if (empty($errors)) {
        // // Connecting to my database (replacing with my database credentials)
        // $servername = "localhost";
        // $username = "luqman";
        // $password = "qwertyuiop";
        // $dbname = "";

        // $conn = new mysqli($servername, $username, $password, $dbname);

        // // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }

        // Prepare and execute SQL statement to insert reservation data
        $sql = "INSERT INTO reservations (date, time, guests, name, phone, email, special_request)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssissss", $date, $time, $guests, $name, $phone, $email, $special_request);
        $stmt->execute();

        // Close database connection
        $stmt->close();
        $conn->close();

        // Redirect to a thank you page or display a success message
        header("Location: menu.php");
        exit();
    }
}
?>