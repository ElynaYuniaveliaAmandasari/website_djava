<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}
include '../backend/db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM menu WHERE id=$id");
$menu = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = $_POST['name'];
    $price = $_POST['price'];
    $image = $menu['image'];

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target = "../images/menu/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }

    $conn->query("UPDATE menu SET name='$name', price='$price', image='$image' WHERE id=$id");
    header('Location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Menu - DJava</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f8f9fa; font-family: 'Poppins', sans-serif; }
    .navbar { background: #43a047; }
    .navbar-brand { color: #fff !important; font-weight: bold; }
    .form-box {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: 50px auto;
    }
    .btn-success { background: #43a047; border: none; }
  </style>
</head>
<body>

<nav class="navbar navbar-dark">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="dashboard.php">☕ DJava Admin</a>
  </div>
</nav>

<div class="form-box">
  <h4 class="text-center mb-4 text-success">Edit Menu</h4>
  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Nama Menu</label>
      <input type="text" name="name" value="<?= $menu['name'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Harga</label>
      <input type="number" name="price" value="<?= $menu['price'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Ganti Gambar (opsional)</label>
      <input type="file" name="image" class="form-control">
      <img src="../images/menu/<?= $menu['image'] ?>" width="80" class="mt-2 rounded">
    </div>
    <button type="submit" class="btn btn-success w-100">Update Menu</button>
    <a href="dashboard.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
  </form>
</div>

</body>
</html>
