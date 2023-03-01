<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../index.php");
}
require_once '../../database/koneksi.php';
include 'proses_tambah_data.php';

use database\koneksi;

$koneksi = new koneksi();
include './layout/header.php';
?>

<head>
<title>Arsip Online - Kediri</title>
<link style=stylesheet type=text>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
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
<table id="datatable" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
        <th class="text-center">No<br><br></th>
        <th class="text-center">Nama Pemilik</th>
        <th class="text-center">Uraian Masalah</th>
        <th class="text-center">Jalan</th>
        <th class="text-center">Kelurahan</th>
        <th class="text-center">Kecamatan</th>
        <th class="text-center">Unit Pengolah</th>
        <th class="text-center">No. Rak</th>
        <th class="text-center">No. Box</th>
        <th class="text-center">Kode Klas</th>
        <th class="text-center">No. Urut</th>
        <th class="text-center">NIPA</th>
        <th class="text-center">Tahun</th>
        <th class="text-center">Keterangan</th>
        <th style="text-align: center; height: 50px; padding-top: 20px; padding-right: 73px; padding-bottom: 30px; padding-left: 73px;">Action</th>
    </tr>
    <tfoot>
            <tr>
            <th class="text-center">No<br><br></th>
        <th class="text-center">Nama Pemilik</th>
        <th class="text-center">Uraian Masalah</th>
        <th class="text-center">Jalan</th>
        <th class="text-center">Kelurahan</th>
        <th class="text-center">Kecamatan</th>
        <th class="text-center">Unit Pengolah</th>
        <th class="text-center">No. Rak</th>
        <th class="text-center">No. Box</th>
        <th class="text-center">Kode Klas</th>
        <th class="text-center">No. Urut</th>
        <th class="text-center">NIPA</th>
        <th class="text-center">Tahun</th>
        <th class="text-center">Keterangan</th>
            </tr>
        </tfoot>
</thead>
<?php require 'panggil-dataarsip.php';?>
</table>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>

$('#datatable thead th').each( function () {
        var title = $('#datatable thead th').eq( $(this).index() ).text();
        if(title!=""){
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
      }
    } );
 
    // DataTable
    var table = $('#datatable').DataTable({
    "columnDefs": [
        { "searchable": false, "targets": [0] }
    ],
    });
 
    // Apply the search
    table.columns().eq( 0 ).each( function ( colIdx ) {
        if( !table.settings()[0].aoColumns[colIdx].bSearchable ){
        table.column( colIdx ).header().innerHTML=table.column( colIdx ).footer().innerHTML;
    }
        $( 'input', table.column( colIdx ).header() ).on( 'keyup change', function () {
            table
                .column( colIdx )
                .search( this.value )
                .draw();
        } );
    } );
    </script>

</div>
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
<?php include './layout/footer.php';?>