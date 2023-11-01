<?php
include 'config.php'; // Include the database connection from config.php

$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($config, "SELECT * FROM tb_admin where admin_username='$user' and admin_password='$pass'");
$cek = mysqli_num_rows($query);

if ($cek == 1) {
    header("location:index.php");
} else {
    echo "Login gagal, cek username dan password.";
}
?>
