<?php
$servername = "localhost";
$username   = "root";   // user dari cPanel
$password   = "admin123";              // password dari cPanel
$database   = "djava_db";     // database dari cPanel

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
