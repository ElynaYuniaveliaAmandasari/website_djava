<?php
session_start();
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Login default
    if ($username === 'admin' && $password === 'Admin@123') {
        $_SESSION['admin'] = true;
        header('Location: /admin/dashboard.php');
        exit;
    } else {
        $error = 'Username atau password salah!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin DJava</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: #e8f5e9;
      font-family: 'Poppins', sans-serif;
    }
    .login-box {
      max-width: 400px;
      margin: 100px auto;
      background: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    h3 {
      color: #43a047;
      font-weight: 600;
    }
    .btn-success {
      background: #43a047;
      border: none;
    }
    .btn-success:hover {
      background: #2e7d32;
    }
  </style>
</head>
<body>
  <div class="login-box text-center">
    <h3>☕ Login Admin DJava</h3>
    <form method="POST">
      <input type="text" name="username" class="form-control mt-3" placeholder="Username" required>
      <input type="password" name="password" class="form-control mt-3" placeholder="Password" required>
      <button type="submit" class="btn btn-success btn-block mt-4 w-100">Masuk</button>
    </form>
    <?php if (!empty($error)) echo "<p class='text-danger mt-3'>$error</p>"; ?>
  </div>
</body>
</html>
