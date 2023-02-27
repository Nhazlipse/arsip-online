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

<style>
label{
    color: black;
    font-weight: bold;
}
.form-control{
    border-color: black;
}
</style>


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
                        <a class="collapse-item" href="arsip.php">Arsip</a>
                        <a class="collapse-item" href="../pinjaman/pinjaman.php">Pinjaman</a>
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
            <img src="../../assets/img/tambaharsip.png"style="width:27%;">
            </div>

            <!-- card body -->
            <div class="card-body">
                <div class="container">
                <form action="proses_tambah_data.php" method="post">
                <div class="form-group">
                <label for="judul">Nama Pemilik:</Nama></label>
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
                    <label for="kelurahan">Kelurahan:</label>
                    <select class="form-control" name="kelurahan" id="kelurahan">
                
            <?php
            $kelurahanOptions = array(
                'Tamanan', 
                'Sukorame', 
                'Pojok', 
                'Ngampel', 
                'Mrican', 
                'Mojoroto', 
                'Lirboyo', 
                'Gayam', 
                'Dermo', 
                'Campurejo', 
                'Bujel', 
                'Banjar Mlati', 
                'Bandar Lor', 
                'Bandar Kidul'
            );
            
            foreach ($kelurahanOptions as $option) {
                $selected = ($row['kelurahan'] == $option) ? 'selected' : '';
                echo '<option ' . $selected . '>' . $option . '</option>';
            }
        ?>

                </select>
                </div>


<div class="form-group">
    <label for="kecamatan">Kecamatan:</label>
    <select class="form-control" name="kecamatan" id="kecamatan">
        <option value="Kota">Kota</option>
        <option value="Mojoroto">Mojoroto</option>
        <option value="Pesantren">Pesantren</option>
        <option value="Campuran">Campuran</option>
    </select>
</div>


        <div class="form-group">
            <label for="Unit Pengolah">Unit Pengolah:</label>
            <input type="text" class="form-control" id="unit_pengolah" name="unit_pengolah"
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
    <label for="tahun">Tahun:</label>
    <select class="form-control" name="tahun" id="tahun">
        <?php
        $current_year = date('Y');
        for ($i = $current_year; $i >= 1999; $i--) {
            echo '<option value="' . $i . '">' . $i . '</option>';
        }
        ?>
    </select>
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