<?php
session_start();

// Database credentials for your existing database
$db_servername = "localhost"; // Usually "localhost" if the database is on the same server
$db_username = "root";
$db_password = "";
$db_name = "perdoruesit";

// Create connection
$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL query to fetch assigned work for the user (assuming the user is identified by their session or user ID)
$username = $_SESSION["username"]; // Change this to the appropriate session or user ID variable
$sql = "SELECT * FROM work WHERE assigned_user = '$username'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listë e Punëve</title>
    <style>
        table {
      width: 100%;
      table-layout: auto; /* Kjo pjesë e kodit e bën tabelën të zgjerohet varësisht nga përmbajtja e tekstit */
      border-collapse: collapse;
      margin-bottom: 20px; /* Për arsye demonstrative, mund ta ndryshoni këtë vlerë sipas nevojës */
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th:nth-child(1), td:nth-child(1) {
      width: 50px; /* Ndërrojeni vlerën e kësaj sipas dëshirës */
    }
    th:nth-child(2), td:nth-child(2) {
      width: 100px; /* Ndërrojeni vlerën e kësaj sipas dëshirës */
    }
    th:nth-child(3), td:nth-child(3) {
      width: 55; /* Ndërrojeni vlerën e kësaj sipas dëshirës */
    }
    th:nth-child(4), td:nth-child(4) {
        width: 20px; /* Gjerësia e checkbox-it */
      }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Titulli i punës</th>
            <th>Koha e caktimit të punës</th>
            <th>Përshkrimi i punës</th>
            <th>Zgjedh</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["data"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td><input type='checkbox' class='checkbox' data-id='" . $row["ID"] . "'></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nuk u gjet asnjë punë e caktuar.</td></tr>";
        }
        ?>
    </table>

    <br>
    <a href="logout.php">Dil</a>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
