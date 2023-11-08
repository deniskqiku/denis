<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .admin-container {
            background-color: #1f1f1f;
            padding: 80px;
            border-radius: 20px;
            width: 250px;
            text-align: center;
        }

        h2 {font-size: 40px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            background-color: #333;
            border: none;
            border-radius: 5px;
            color: #ffffff;
        }

        input[type="submit"] {
            width: calc(100% - 20px);
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            padding: 15px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
           
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .logout-button {
   
    background-color: #4caf50;
    color: #ffffff;
    border: 1px;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
    transition: background-color 0.3s ease;
    margin:30px 0 0 0;
    display: inline-block;
    
}

.logout-button:hover {
    background-color: #45a049;
}
    </style>
</head>


<body>
    <div class="admin-container">
        <h2>Pershendetje, Admin!</h2>
        <h4>Regjistroni perdorues te ri!</h4>
        
        <form action="register.php" method="post">
            <label for="newUsername">New Username:</label>
            <input type="text" id="newUsername" name="newUsername" required><br><br>
            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" required><br><br>
            <input type="submit" value="Register">
            <a href="logout.php" class="logout-button">Logout</a>
        </form>
    </div>
</body>

</html>
