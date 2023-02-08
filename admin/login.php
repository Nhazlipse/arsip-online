<?php
//panggil koneksi
require_once '../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();


//deklarasikan user dan pass
$password = md5($_POST['password']);
$username = $_POST['username'];


$query = "SELECT * FROM tb_admin WHERE username='$username' and  password = '$password'";
$login = $koneksi->query($query);
$data = mysqli_fetch_array($login);


// jika tidak di temukan user/pass tuser
if ($data) {
    session_start();
    $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['nama_admin'] = $data['nama_admin'];
    header("location: dashboard.php");
} else {
    echo "<script>alert('Login Gagal, Akun tidak ditemukan..!');document.location='../index.php';</script>";
}
