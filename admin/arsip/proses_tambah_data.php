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

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Get data from form
    $nama = $_POST['nama'];
    $masalah = $_POST['masalah'];
    $jalan = $_POST['jalan'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $unit_pengolah = $_POST['unit_pengolah'];
    $no_rak = $_POST['no_rak'];
    $no_box = $_POST['no_box'];
    $kode_klas = $_POST['kode_klas'];
    $no_urut = $_POST['no_urut'];
    $nipa = $_POST['nipa'];
    $tahun = $_POST['tahun'];
    $keterangan = $_POST['keterangan'];


    // Check if connection is successful
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL query
    $query = "INSERT INTO tb_dataarsip (nama, masalah, jalan, kelurahan, kecamatan, unit_pengolah, no_rak, no_box, kode_klas, no_urut, nipa, tahun, keterangan) 
            VALUES ('$nama', '$masalah', '$jalan', '$kelurahan', '$kecamatan', '$unit_pengolah', '$no_rak', '$no_box', '$kode_klas', '$no_urut', '$nipa', '$tahun', '$keterangan')";
    $koneksi->query($query);

    // return a success message
    echo "<script>alert('Data berhasil disimpan.');document.location='?';</script>";
    header("location: arsip.php");
}
?>