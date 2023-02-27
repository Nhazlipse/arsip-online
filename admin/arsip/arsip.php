<?php
require_once '../../database/koneksi.php';
include 'proses_tambah_data.php';

use database\koneksi;

$koneksi = new koneksi();
include './layout/header.php';
?>

<head>
<title>Arsip Online - Kediri</title>
<link style=stylesheet type=text>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#2b2b2b;">


<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="../dashboard.php"style="margin-top:68px;">
<div class="sidebar-brand-icon text-center">
<img src="../../assets/img/arsip.png" width="77%">
</div>
</a>

<!-- Nav Item - Dashboard -->
<li class="nav-item active"style="margin-top:68px;">
<a class="nav-link" href="../dashboard.php">
<i class="fas fa-fw fa-tachometer-alt"></i>
<span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Menu
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
aria-expanded="true" aria-controls="collapseTwo">
<i class="fas fa-fw fa-table"></i>
<span>Data Arsip</span>

</a>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header"><b>Pilih Menu:</b></h6>
    <a class="collapse-item" href="arsip.php"><b>Arsip</b></a>
    <a class="collapse-item" href="../pinjaman/pinjaman.php"><b>Pinjaman</b></a>
</div>
</div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Judul Menu -->
<form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-0 my-2 my-md-0 mw-100 navbar-search">
    <img src="../../assets/img/tulisan.png" width="36%">
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrasi</span>
            <img class="img-profile rounded-circle" src="../../assets/img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- Data Pengunjung -->
<div class="container"style="padding-left:0px; padding-right:0px;">
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-center">
            <img src="../../assets/img/dataarsip.png"style="width:16%;">
        </div>

        <!-- card body -->
        <div class="card-body">

<!-- Tombol Tambah Data -->
<div class="tambahdata">
<a href="tambah_data.php" class="btn btn-primary">Tambah Data</a><br><br>

<!-- buat kolom -->
<div class="table-responsive">
<table class="table table-bordered" id="dataTable1" width="262%"
cellspacing="0">
<thead>
    <tr>
        <th class="text-center">No<br><br></th>
        <th class="text-center">Nama Pemilik<br><input type="text" class="searchinput" id="searchInput1" onkeyup="searchTable()"></th>
        <th class="text-center">Uraian Masalah<br><input type="text" class="searchinput" id="searchInput2" onkeyup="searchTable()"></th>
        <th class="text-center">Jalan<br><input type="text" class="searchinput" id="searchInput3" onkeyup="searchTable()"></th>
        <th class="text-center">Kelurahan<br><input type="text" class="searchinput" id="searchInput4" onkeyup="searchTable()"></th>
        <th class="text-center">Kecamatan<br><input type="text" class="searchinput" id="searchInput5" onkeyup="searchTable()"></th>
        <th class="text-center">Unit Pengolah<br><input type="text" class="searchinput" id="searchInput6" onkeyup="searchTable()"></th>
        <th class="text-center">No. Rak<br><input type="text" class="searchinput" id="searchInput7" onkeyup="searchTable()"></th>
        <th class="text-center">No. Box<br><input type="text" class="searchinput" id="searchInput8" onkeyup="searchTable()"></th>
        <th class="text-center">Kode Klas<br><input type="text" class="searchinput" id="searchInput9" onkeyup="searchTable()"></th>
        <th class="text-center">No. Urut<br><input type="text" class="searchinput" id="searchInput10" onkeyup="searchTable()"></th>
        <th class="text-center">NIPA<br><input type="text" class="searchinput" id="searchInput11" onkeyup="searchTable()"></th>
        <th class="text-center">Tahun<br><input type="text" class="searchinput" id="searchInput12" onkeyup="searchTable()"></th>
        <th class="text-center">Keterangan<br><input type="text" class="searchinput" id="searchInput13" onkeyup="searchTable()"></th>
        <th style="text-align: center; height: 50px; padding-top: 20px; padding-right: 73px; padding-bottom: 30px; padding-left: 73px;">Action</th>


    </tr>
</thead>
<?php require 'panggil-dataarsip.php';?>
</table>
</div>
</div>
<?php require 'next-page.php';?>
</div>
</div>



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin ingin
            keluar?</h5>
        <button class="close" type="button" data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Pilih "Logout" Jika kamu ingin keluar dari session.
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button"
            data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger" href="logout.php">Logout</a>
    </div>
</div>
</div>
</div>

</body>

</html>
<script><?php require_once 'js/arsip.js'?></script>;
<?php include './layout/footer.php';?>