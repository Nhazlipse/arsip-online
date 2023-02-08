<?php
  session_start();
  if (!isset($_SESSION['admin'])) {
    header('Location: dashboard.php');
    exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Admin</title>
</head>
<body>
  <h1>Halaman Admin</h1>
  <a href="logout.php">Logout</a>
</body>
</html>
