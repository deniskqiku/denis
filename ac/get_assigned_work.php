<?php
// Database credentials for your existing database
$servername = "localhost"; // Usually "localhost" if the database is on the same server
$username = "root";
$password = "";
$dbname = "perdoruesit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL query to fetch assigned work for the user (assuming the user is identified by their session or user ID)
$userID = $_SESSION["user_id"]; // Change this to the appropriate session or user ID variable
$sql = "SELECT * FROM work WHERE assigned_user = '$userID'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<strong>Title:</strong> " . $row["title"] . "<br>";
        echo "<strong>Description:</strong> " . $row["description"] . "<br><br>";
    }
} else {
    echo "No assigned work found.";
}

// Close the database connection
$conn->close();
?>
