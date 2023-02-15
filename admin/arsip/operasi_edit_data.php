<!-- operasi untuk edit data form -->
<?php

require_once '../../database/koneksi.php';

use database\koneksi;

 // Get data from form
 $id = $_POST['id_dataarsip'];
 $nama = $_POST['nama'];
 $masalah = $_POST['masalah'];
 $jalan = $_POST['jalan'];
 $kelurahan = $_POST['kelurahan'];
 $kecamatan = $_POST['kecamatan'];
 $no_rak = $_POST['no_rak'];
 $no_box = $_POST['no_box'];
 $kode_klas = $_POST['kode_klas'];
 $no_urut = $_POST['no_urut'];
 $nipa = $_POST['nipa'];
 $tahun = $_POST['tahun'];
 $keterangan = $_POST['keterangan'];

$query = "UPDATE tb_dataarsip SET nama='$nama', masalah='$masalah', jalan='$jalan', kelurahan='$kelurahan', no_rak='$no_rak', no_box='$no_box', kode_klas='$kode_klas', no_urut='$no_urut', nipa='$nipa', tahun='$tahun', keterangan='$keterangan' WHERE id_dataarsip='$id'";
$koneksi = new koneksi();
$koneksi->query($query);

if ($koneksi) {
    header("location:arsip.php");
} else {
    // Notification Using Script
    echo "<script>alert('Data Gagal Diupdate');window.location='arsip.php';</script>";
}
