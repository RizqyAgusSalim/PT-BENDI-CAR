<?php
session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Mengambil data user yang sedang login
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$current_user = $stmt->fetch();

// Create connection
$connection = mysqli_connect($namahost, $username, $password, $database);
echo "Connected succesfully";

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Connection failed";
}