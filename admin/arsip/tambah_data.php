<?php include './layout/header.php'; ?>


<?php
require_once '../../database/koneksi.php';
include 'proses_tambah_data.php';

use database\koneksi;

$koneksi = new koneksi();

include './layout/header.php';
?>

<head>

    <title>Arsip Online - Kediri</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#2b2b2b;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../dashboard.php">
                <div class="sidebar-brand-icon text-center">
                    <br><br><br><br><br><br>
                    <img src="../../assets/img/arsip.png" width="77%">
                </div>
            </a>

            <!-- Nav Item - Dashboard -->
            <br><br><br><br><br><br>
            <li class="nav-item active">
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
                        <a class="collapse-item" href="arsip.php">Arsip</a>
                        <a class="collapse-item" href="../pinjaman/pinjaman.php">Pinjaman</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


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
                            <img src="../../assets/img/tambaharsip.png"style="width:27%;">
                            </div>

                            <!-- card body -->
                            <div class="card-body">

    <div class="form-group">
        <label for="judul">Nama Pemilik IMB:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="judul">Masalah:</label>
        <input type="text" class="form-control" id="masalah" name="masalah" required>
    </div>
    <div class="form-group">
        <label for="judul">Jalan:</label>
        <input type="text" class="form-control" id="jalan" name="jalan" required>
    </div>
    <div class="form-group">
        <label for="judul">Kelurahan:</label>
        <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
    </div>
    <div class="form-group">
        <label for="judul">Kecamatan:</label>
        <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
    </div>
    <div class="form-group">
        <label for="judul">No. Rak:</label>
        <input type="text" class="form-control" id="no_rak" name="no_rak" required>
    </div>
    <div class="form-group">
        <label for="judul">No. Box:</label>
        <input type="text" class="form-control" id="no_box" name="no_box" required>
    </div>
    <div class="form-group">
        <label for="judul">Kode Klas:</label>
        <input type="text" class="form-control" id="kode_klas" name="kode_klas" required>
    </div>
    <div class="form-group">
        <label for="judul">No. Urut:</label>
        <input type="text" class="form-control" id="no_urut" name="no_urut" required>
    </div>
    <div class="form-group">
        <label for="judul">NIPA:</label>
        <input type="text" class="form-control" id="nipa" name="nipa" required>
    </div>
    <div class="form-group">
        <label for="judul">Tahun:</label>
        <input type="date" class="form-control" id="tahun" name="tahun" required>
    </div>
    <div class="form-group">
        <label for="judul">Keterangan:</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
    </div>

                                        <div class="form-group">
                                            <label for="judul">Nama Pemilik IMB:</label>
                                            <input type="text" class="form-control" id="nama" name="nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Masalah:</label>
                                            <input type="text" class="form-control" id="masalah" name="masalah"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Jalan:</label>
                                            <input type="text" class="form-control" id="jalan" name="jalan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Kelurahan:</label>
                                            <input type="text" class="form-control" id="kelurahan" name="kelurahan"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Kecamatan:</label>
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">No. Rak:</label>
                                            <input type="text" class="form-control" id="no_rak" name="no_rak" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">No. Box:</label>
                                            <input type="text" class="form-control" id="no_box" name="no_box" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Kode Klas:</label>
                                            <input type="text" class="form-control" id="kode_klas" name="kode_klas"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">No. Urut:</label>
                                            <input type="text" class="form-control" id="no_urut" name="no_urut"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NIPA:</label>
                                            <input type="text" class="form-control" id="nipa" name="nipa" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tahun:</label>
                                            <input type="text" class="form-control" id="tahun" name="tahun" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Keterangan:</label>
                                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                                required>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="arsip.php" class="btn btn-danger">Cancel</a>
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