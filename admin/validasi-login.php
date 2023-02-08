<?php
  session_start();
  include '../koneksi.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['admin'] = true;
    header('Location: admin.php');
    exit;
  } else {
    $_SESSION['error'] = 'Invalid username or password';
    header('Location: index.php');
    exit;
  }
?>
