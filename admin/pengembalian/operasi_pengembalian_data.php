<?php
//panggil koneksi
require_once '../.././database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

if (isset($_GET['id_transaksi'])) {
    $id_transaksi = $_GET['id_transaksi'];
    $sql = "UPDATE tb_transaksi SET status = 'tersedia', tanggal_pinjam = null WHERE id_transaksi = $id_transaksi";
    if ($koneksi->query($sql)) {
        echo "<script>alert('Data dengan ID transaksi $id_transaksi telah dikembalikan.')</script>";
        echo "<script>window.location.href='pengembalian.php'</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($koneksi) . "')</script>";
        echo "<script>window.location.href='../pinjaman/pinjaman.php'</script>";
    }
} else {
    echo "<script>window.location.href='../pinjaman/pinjaman.php'</script>";
}
?>