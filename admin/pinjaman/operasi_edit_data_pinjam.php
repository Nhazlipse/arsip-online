<!-- operasi untuk edit data form -->
<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../index.php");
}

require_once '../../database/koneksi.php';

use database\koneksi;

 // Get data from form
 $id = $_POST['id_transaksi'];
 $nama_pemilik = $_POST['nama_pemilik'];
 $keterangan_pinjam = $_POST['keterangan_pinjam'];
 $no_identitas = $_POST['no_identitas'];
 $tgl = $_POST['tanggal_pinjam'];
 $jumlah = $_POST['jumlah'];
 $status = $_POST['status'];

$query = "UPDATE tb_transaksi SET nama_pemilik='$nama_pemilik', keterangan_pinjam='$keterangan_pinjam', no_identitas='$no_identitas', tanggal_pinjam='$tgl', jumlah='$jumlah', status='$status' WHERE id_transaksi='$id'";
$koneksi = new koneksi();
$koneksi->query($query);

if ($koneksi) {
    header("location: pinjaman.php");
} else {
    // Notification Using Script
    echo "<script>alert('Data Gagal Diupdate');window.location='pinjaman.php';</script>";
}
