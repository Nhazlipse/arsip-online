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

<!-- UNTUK MEMANGGIL DATA DARI DATABASE DAN DI TAMPILKAN DI EDIT FORM -->
    <?php
$id = $_GET['id_dataarsip'];
$query = "SELECT * FROM tb_dataarsip WHERE id_dataarsip = '$id'";
$result = $koneksi->query($query);
$row = mysqli_fetch_assoc($result);
?>

<!-- Data Pengunjung -->
<div class="container">
<div class="card shadow mb-4">
    <div class="card-header py-3 text-center">
        <img src="../../assets/img/tambaharsip.png"style="width:29%;">
    </div>

<!-- form edit data pengunjung -->
<div class="container">
<div class="card-body">
    <div class="row">
        <div class="col-md-12">

            <form action="operasi_edit_data.php" method="POST">
                <div class="form-group">
                    <label for="id_dataarsip">ID</label>
                    <input type="text" class="form-control" name="id_dataarsip"
                        id="id_dataarsip" value="<?php echo $row['id_dataarsip']; ?>"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama"
                        required value="<?php echo $row['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="masalah">Masalah</label>
                    <input type="text" class="form-control" name="masalah" id="masalah"
                        required value="<?php echo $row['masalah']; ?>">
                </div>
                <div class="form-group">
                    <label for="jalan">Jalan</label>
                    <input type="text" class="form-control" name="jalan" id="jalan"
                        required value="<?php echo $row['jalan']; ?>">
                </div>

                <div class="form-group">
                <label for="kelurahan">Kelurahan</label>
                <select class="form-control" name="kelurahan" id="kelurahan" required>
                    <option value="">Pilih kelurahan</option>
                    <option value="Tamanan" <?php if ($row['kelurahan'] == 'Tamanan') { echo 'selected'; } ?>>Tamanan</option>
                    <option value="Sukorame" <?php if ($row['kelurahan'] == 'Sukorame') { echo 'selected'; } ?>>Sukorame</option>
                    <option value="Pojok" <?php if ($row['kelurahan'] == 'Pojok') { echo 'selected'; } ?>>Pojok</option>
                    <option value="Ngampel" <?php if ($row['kelurahan'] == 'Ngampel') { echo 'selected'; } ?>>Ngampel</option>
                    <option value="Mrican" <?php if ($row['kelurahan'] == 'Mrican') { echo 'selected'; } ?>>Mrican</option>
                    <option value="Mojoroto" <?php if ($row['kelurahan'] == 'Mojoroto') { echo 'selected'; } ?>>Mojoroto</option>
                    <option value="Lirboyo" <?php if ($row['kelurahan'] == 'Lirboyo') { echo 'selected'; } ?>>Lirboyo</option>
                    <option value="Gayam" <?php if ($row['kelurahan'] == 'Gayam') { echo 'selected'; } ?>>Gayam</option>
                    <option value="Dermo" <?php if ($row['kelurahan'] == 'Dermo') { echo 'selected'; } ?>>Dermo</option>
                    <option value="Campurejo" <?php if ($row['kelurahan'] == 'Campurejo') { echo 'selected'; } ?>>Campurejo</option>
                    <option value="Bujel" <?php if ($row['kelurahan'] == 'Bujel') { echo 'selected'; } ?>>Bujel</option>
                    <option value="Banjar Mlati" <?php if ($row['kelurahan'] == 'Banjar Mlati') { echo 'selected'; } ?>>Banjar Mlati</option>
                    <option value="Bandar Lor" <?php if ($row['kelurahan'] == 'Bandar Lor') { echo 'selected'; } ?>>Bandar Lor</option>
                    <option value="Bandar Kidul" <?php if ($row['kelurahan'] == 'Bandar Kidul') { echo 'selected'; } ?>>Bandar Kidul</option>
                </select>
            </div>

                
                <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <select class="form-control" name="kecamatan" id="kecamatan" required>
                    <option value="">Pilih kecamatan</option>
                    <option value="Kota" <?php if ($row['kecamatan'] == 'Kota') { echo 'selected'; } ?>>Kota</option>
                    <option value="Mojoroto" <?php if ($row['kecamatan'] == 'Mojoroto') { echo 'selected'; } ?>>Mojoroto</option>
                    <option value="Pesantren" <?php if ($row['kecamatan'] == 'Pesantren') { echo 'selected'; } ?>>Pesantren</option>
                    <option value="Campuran" <?php if ($row['kecamatan'] == 'Campuran') { echo 'selected'; } ?>>Campuran</option>
                </select>
            </div>


                <div class="form-group">
                    <label for="Unit Pengolah">Unit Pengolah</label>
                    <input type="text" class="form-control" name="unit_pengolah"
                        id="unit_pengolah" required
                        value="<?php echo $row['unit_pengolah']; ?>">
                </div>
                <div class="form-group">
                    <label for="no_rak">No. Rak</label>
                    <input type="text" class="form-control" name="no_rak" id="no_rak"
                        required value="<?php echo $row['no_rak']; ?>">
                </div>
                <div class="form-group">
                    <label for="no_box">No. Box</label>
                    <input type="text" class="form-control" name="no_box" id="no_box"
                        required value="<?php echo $row['no_box']; ?>">
                </div>
                <div class="form-group">
                    <label for="kode_klas">Kode KLAS</label>
                    <input type="text" class="form-control" name="kode_klas"
                        id="kode_klas" required
                        value="<?php echo $row['kode_klas']; ?>">
                </div>
                <div class="form-group">
                    <label for="no_urut">No. Urut</label>
                    <input type="text" class="form-control" name="no_urut" id="no_urut"
                        required value="<?php echo $row['no_urut']; ?>">
                </div>
                <div class="form-group">
                    <label for="nipa">NIPA</label>
                    <input type="text" class="form-control" name="nipa" id="nipa"
                        required value="<?php echo $row['nipa']; ?>">
                </div>

                <div class="form-group">
                <label for="tahun">Tahun</label>
                <select class="form-control" name="tahun" id="tahun">
                    
                <?php
                $start_year = 1945; // Tahun awal
                $end_year = 2030; // Tahun akhir
                $selected_year = $row['tahun']; // Tahun yang dipilih sebelumnya
                for ($year = $end_year; $year >= $start_year; $year--) {
                    $selected = ($year == $selected_year) ? 'selected' : '';
                    echo '<option ' . $selected . ' value="' . $year . '">' . $year . '</option>';
                }
                ?>

                </select>
                </div>


                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan"
                        id="keterangan" required
                        value="<?php echo $row['keterangan']; ?>">
                </div>

                <button type="submit" class="btn btn-primary" name="Update"
                    value="Update Data">
                    Submit
                </button>
                <button type="submit" action="arsip.php" class="btn btn-danger">
                    Cancel
                </button>
            </form>
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