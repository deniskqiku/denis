<?php
// Establish a MySQL connection (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "perdoruesit";

$conn = new mysqli($servername, $username, $password, $database);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = $_POST["newUsername"];
    $newPassword = $_POST["newPassword"];
    
    // Assuming you have a database connection established here
    
    // Insert new user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$newUsername', '$newPassword')";
    if ($conn->query($sql) === TRUE) {
        // Registration successful
        echo '<script>alert("User registered successfully!");</script>';
        echo '<script>window.location.href = "admin.php";</script>';
        exit();
    } else {
        // Registration failed
        echo '<script>alert("Error occurred during registration. Please try again.");</script>';
        echo '<script>window.location.href = "admin.php";</script>';
        exit();
    }
}

// Close the database connection
$conn->close();
?>

