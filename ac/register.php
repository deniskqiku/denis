<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="admin-container">
<form action="register.php" method="post">
            <label for="newUsername">New Username:</label>
            <input type="text" id="newUsername" name="newUsername" required><br><br>
            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" required><br><br>
            <input type="submit" value="Register">
           
        </form>
</body>
</html><?php
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

