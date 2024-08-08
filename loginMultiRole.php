<?php
session_start();
include 'koneksi.php';

// Memastikan data POST tersedia
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menghindari SQL Injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Menjalankan query
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['role'];

        // Pengarahan berdasarkan role
        if ($row['role'] == 'admin') {
            header("Location: adminDashboard.php");
        } else {
            header("Location: userDashboard.php");
        }
    } else {
        $_SESSION['error'] = "Username or password is incorrect";
        header("Location: loginForm.html");
    }
} else {
    $_SESSION['error'] = "Please fill in the username and password.";
    header("Location: loginForm.html");
}
?>
