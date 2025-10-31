<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}
include '../backend/db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM menu WHERE id=$id");
header('Location: dashboard.php');
?>
