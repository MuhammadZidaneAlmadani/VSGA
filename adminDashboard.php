<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: loginForm.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: space-between;
        }

        .navbar {
            background-color: #333;
            padding: 10px;
            text-align: center;
            color: white;
        }

        .content {
            padding: 20px;
            text-align: center;
            flex: 1;
        }

        .content h1 {
            color: #333;
        }

        .footer {
            background-color: #333;
            padding: 10px;
            text-align: center;
            color: white;
        }

        .footer a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .footer a:hover {
            background-color: #575757;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <span>Admin Dashboard</span>
    </div>
    <div class="content">
        <h1>Welcome, Admin</h1>
        <p>Manage your system here.</p>
    </div>
    <div class="footer">
        <a href="sessionLogout.php">Logout</a>
    </div>
</body>
</html>
