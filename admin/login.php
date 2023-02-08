<?php
//panggil koneksi
require_once '../database/koneksi.php';

//deklarasikan user dan pass
$password = md5($_POST['password']);
$username = $_POST['username'];


$query = "SELECT * FROM tb_admin WHERE username='$username' and  password = '$password'";
$login = $koneksi->query($query);
$data = mysqli_fetch_array($login);

// jika tidak di temukan user/pass tuser
if ($data) {
    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header("location: dashboard.php");
} else {
    echo "<script>alert('Login Gagal, Akun tidak ditemukan..!');document.location='../index.php';</script>";
}