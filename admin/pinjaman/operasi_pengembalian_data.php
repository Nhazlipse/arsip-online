<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../index.php");
}

//panggil koneksi
require_once '../.././database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

if (isset($_GET['id_transaksi'])) {
    $tanggal_dikembalikan = date('Y-m-d');
    $id_transaksi = $_GET['id_transaksi'];
    $sql = "UPDATE tb_transaksi SET status = 'Tersedia', tanggal_dikembalikan = '$tanggal_dikembalikan' WHERE id_transaksi = $id_transaksi";
    if ($koneksi->query($sql)) {
        echo "<script>alert('Data dengan ID transaksi $id_transaksi telah dikembalikan.')</script>";
        echo "<script>window.location.href='pinjaman.php'</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($koneksi) . "')</script>";
        echo "<script>window.location.href='pinjaman.php'</script>";
    }
} else {
    echo "<script>window.location.href='pinjaman.php'</script>";
}
?>