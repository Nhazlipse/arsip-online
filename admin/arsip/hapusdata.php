<!-- session agar (bukan admin) tidak dapat mengakses file admin -->
<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../index.php");
}
require_once '../../database/koneksi.php';

use database\koneksi;


// hapus data pengungjung
$id = $_GET['id_dataarsip'];
$sql = "DELETE FROM tb_dataarsip WHERE id_dataarsip = $id";
$koneksi = new koneksi();
$koneksi->query($sql);

if ($koneksi) {
    header("location:arsip.php");
} else {
    // Notification Using Script
    echo "<script>alert('Data Gagal Diupdate');window.location='arsip.php';</script>";
}