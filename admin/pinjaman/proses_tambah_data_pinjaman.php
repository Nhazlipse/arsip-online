<?php

//panggil koneksi
require_once '../../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Get data from form
    $nama_pemilik = $_POST['nama_pemilik'];
    $keterangan_pinjam = $_POST['keterangan_pinjam'];
    $peminjam = $_POST['peminjam'];
    $no_identitas = $_POST['no_identitas'];
    $tgl = $_POST['tanggal_pinjam'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];


    // Check if connection is successful
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL query
    $query = "INSERT INTO tb_transaksi (nama_pemilik, keterangan_pinjam, peminjam, no_identitas, tanggal_pinjam, jumlah, status) 
            VALUES ('$nama_pemilik', '$keterangan_pinjam', '$peminjam', '$no_identitas', '$tgl', '$jumlah', '$status')";
    $koneksi->query($query);

    // return a success message
    echo "<script>alert('Data berhasil disimpan.');document.location='?';</script>";
    header("location: pinjaman.php");
}
?>