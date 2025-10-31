<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}
include '../backend/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target = "../images/menu/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $conn->query("INSERT INTO menu (name, price, image) VALUES ('$name', '$price', '$image')");
        header('Location: dashboard.php');
    } else {
        echo "Upload gambar gagal!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Menu - DJava</title>
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
  <h4 class="text-center mb-4 text-success">Tambah Menu Baru</h4>
  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Nama Menu</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Harga</label>
      <input type="number" name="price" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Gambar</label>
      <input type="file" name="image" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success w-100">Simpan Menu</button>
    <a href="dashboard.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
  </form>
</div>

</body>
</html>
