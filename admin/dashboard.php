<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}

include '../backend/db.php';
$result = $conn->query("SELECT * FROM menu");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin - DJava</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
    .navbar {
      background: #43a047;
    }
    .navbar-brand {
      color: #fff !important;
      font-weight: bold;
    }
    .container {
      margin-top: 40px;
    }
    .title-green {
        color: #43a047;
    }
    table {
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    th {
      background: #43a047;
      color: white;
      text-align: center;
    }
    td {
      vertical-align: middle;
      text-align: center;
    }
    .btn {
      border-radius: 20px;
    }
    .menu-img {
      border-radius: 8px;
      width: 60px;
      height: 60px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="#">☕ DJava Admin</a>
    <div class="d-flex">
      <a href="add-menu.php" class="btn btn-light btn-sm me-2">+ Tambah Menu</a>
      <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
  </div>
</nav>

<div class="container">
  <h3 class="mb-4 fw-bold text-center title-green">Daftar Menu DJava</h3>
  <div class="table-responsive">
    <table class="table table-bordered align-middle">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; while($row=$result->fetch_assoc()): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($row['name']) ?></td>
          <td>Rp <?= number_format($row['price'],0,',','.') ?></td>
          <td><img src="../images/menu/<?= htmlspecialchars($row['image']) ?>" class="menu-img"></td>
          <td>
            <a href="edit-menu.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm me-1">✏️ Edit</a>
            <a href="delete-menu.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus menu ini?')">🗑️ Hapus</a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
