<?php
require_once '../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO tabel_nama (nama, alamat) VALUES ('$nama', '$alamat')";

if ($koneksi->run($sql)) {
  header("Location: index.php");
} else {
  echo "Gagal menambahkan data";
}
?>
