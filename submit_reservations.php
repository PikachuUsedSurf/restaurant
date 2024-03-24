<?php
include("server.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields
    $errors = array();

    // Validate date
    $date = $_POST["date"];
    if (empty($date)) {
        $errors[] = "Date is required.";
    }

    // Validate time
    $time = $_POST["time"];
    if (empty($time)) {
        $errors[] = "Time is required.";
    }

    // Validate number of guests
    $guests = $_POST["guests"];
    if (empty($guests)) {
        $errors[] = "Number of guests is required.";
    }

    // Validate name
    $name = $_POST["name"];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    // Validate phone
    $phone = $_POST["phone"];
    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    }

    // Validate email
    $email = $_POST["email"];
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate special request (optional)
    $special_request = $_POST["special_request"];

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
