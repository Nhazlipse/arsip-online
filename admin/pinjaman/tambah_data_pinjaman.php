<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../index.php");
}

require_once '../../database/koneksi.php';
include 'proses_tambah_data_pinjaman.php';

use database\koneksi;

$koneksi = new koneksi();

include './layout/header.php';
?>

<head>

    <title>Arsip Online - Kediri</title>
    <link rel="stylesheet" href="layout/css/style.css">
    
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
                        <h6 class="collapse-header">Pilih Menu:</h6>
                        <a class="collapse-item" href="../arsip/arsip.php">Arsip</a>
                        <a class="collapse-item" href="pinjaman.php">Pinjaman</a>
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
                    <div class="container">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 text-center">
                            <img src="../../assets/img/tambahdatapinjam.png"style="width:35%;">
                            </div>

                            <!-- card body -->
                            <div class="card-body">

                                <!-- Tambah Data Arsip Form -->
                                <div class="container">
                                    <form action="proses_tambah_data_pinjaman.php" method="post">

                                        <div class="form-group">
                                            <label for="judul">Nama Pemilik:</label>
                                            <input type="text" class="form-control" id="nama_pemilik"
                                                name="nama_pemilik" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Masalah:</label>
                                            <input type="text" class="form-control" id="keterangan_pinjam"
                                                name="keterangan_pinjam" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Peminjam:</label>
                                            <input type="text" class="form-control" id="peminjam" name="peminjam"
                                                >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">No. Identitas:</label>
                                            <input type="number" class="form-control" id="no_identitas"
                                                name="no_identitas" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tanggal Pinjam:</label>
                                            <input type="date" class="form-control" id="tanggal_pinjam"
                                                name="tanggal_pinjam" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Jumlah:</label>
                                            <input type="number" class="form-control" id="jumlah" name="jumlah" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Status:</label>
                                            <input type="text" class="form-control" id="status" name="status"
                                                value="dipinjam" readonly>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="pinjaman.php" class="btn btn-danger">Cancel</a>
                                    </form>
                                </div>

                                <!-- akhir container -->

                            </div>
                            <!-- End of Page Wrapper -->

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
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">??</span>
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