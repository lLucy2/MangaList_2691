<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Prepare an SQL statement to insert user information into the database
$stmt = $config->prepare("INSERT INTO `tb_admin` (admin_username, admin_password) VALUES (?, ?)");
$stmt->bind_param('ss', $username, $password); // No password hashing

// Execute the SQL statement
if ($stmt->execute()) {
    // Registration successful
    header('Location: login.php');
} else {
    // Registration failed
    die('Registration failed: ' . $config->error);
}
?>
