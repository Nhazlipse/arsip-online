<?php
//panggil koneksi
require_once '../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();


//deklarasikan user dan pass
$password = md5($_POST['password']);
$username = $_POST['username'];


$query = "SELECT * FROM tb_member WHERE username='$username' and  password = '$password'";
$login = $koneksi->query($query);
$data = mysqli_fetch_array($login);


// jika tidak di temukan user/pass tuser
if ($data) {
    session_start();
    $_SESSION['id_member'] = $data['id_member'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header("location: dashboard.php");
} else {
    echo "<script>window.alert('Login Gagal, Akun tidak ditemukan..!');window.location.href='index.php';</script>";
}
