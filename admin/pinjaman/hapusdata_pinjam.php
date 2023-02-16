<!-- session agar (bukan admin) tidak dapat mengakses file admin -->
<?php
require_once '../../database/koneksi.php';

use database\koneksi;


// hapus data pengungjung
$id = $_GET['id_transaksi'];
$sql = "DELETE FROM tb_transaksi WHERE id_transaksi = $id";
$koneksi = new koneksi();
$koneksi->query($sql);

if ($koneksi) {
    header("location:pinjaman.php");
} else {
    // Notification Using Script
    echo "<script>alert('Data Gagal Diupdate');window.location='pinjaman.php';</script>";
}
