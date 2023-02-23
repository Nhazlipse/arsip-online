<?php
require_once '../../database/koneksi.php';
include 'proses_tambah_data_pinjaman.php';

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
            <li class="nav-item active">
                <a class="nav-link" href="../dashboard.php"style="margin-top:68px;">
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
        <!-- ENDING DARI BAGIAN ADMIN TOOLS -->

        <!-- DARI SINI ISI KONTEN NYA -->
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
                <!-- ENDING DARI ADMIN PANEL -->


                <!-- JAVASCIRPT BUAT CARI DATA -->
                <script>
function searchTable() {
    var input1, input2, input3, filter1, filter2, filter3, table, tr, td1, td2, td3, i, txtValue1, txtValue2, txtValue3;
    input1 = document.getElementById("searchInput1");
    input2 = document.getElementById("searchInput2");
    input3 = document.getElementById("searchInput3");
    filter1 = input1.value.toUpperCase();
    filter2 = input2.value.toUpperCase();
    filter3 = input3.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td1 = tr[i].getElementsByTagName("td")[1]; // index kolom kedua, yaitu kolom nama
        td2 = tr[i].getElementsByTagName("td")[2]; // index kolom ketiga, yaitu kolom masalah
        td3 = tr[i].getElementsByTagName("td")[3]; // index kolom keempat, yaitu kolom peminjam
        if (td1 || td2 || td3) {
            txtValue1 = td1.textContent || td1.innerText;
            txtValue2 = td2.textContent || td2.innerText;
            txtValue3 = td3.textContent || td3.innerText;
            if (txtValue1.toUpperCase().indexOf(filter1) > -1 && txtValue2.toUpperCase().indexOf(filter2) > -1 && txtValue3.toUpperCase().indexOf(filter3) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
                </script>
                <!-- END JAVASCRIPT -->

                <!-- AWAL DARI ISI KONTEN -->
                <div class="container-fluid">


                    <!-- Data Pengunjung -->
                    <div class="container">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 text-center">
                                <img src="../../assets/img/datapinjam.png"style="width:23%;">
                            </div>

                            <!-- card body -->
                            <div class="card-body">

                                <!-- Tombol Tambah Data -->
                                <div class="tambahdata">
                                    <a href="tambah_data_pinjaman.php" class="btn btn-primary">Tambah Data</a><br><br>

                                    <!-- buat kolom -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered font-weight-normal"
                                            style='monospace; font-size:90%' id="dataTable" width="160%"
                                            cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th>Pemilik<br><input type="text" id="searchInput1" onkeyup="searchTable()"></th>
                                                    <th>Masalah<br><input type="text" id="searchInput2" onkeyup="searchTable()"></th>
                                                    <th>Peminjam<br><input type="text" id="searchInput3" onkeyup="searchTable()"></th>
                                                    <th>No. Identitas<br><input type="text" id="searchInput4" onkeyup="searchTable()"></th>
                                                    <th>Tanggal Pinjam<br><input type="text" id="searchInput5" onkeyup="searchTable()"></th>
                                                    <th>Tanggal Dikembalikan<br><input type="text" id="searchInput6" onkeyup="searchTable()"></th>
                                                    <th>Jumlah<br><input type="text" id="searchInput7" onkeyup="searchTable()"></th>
                                                    <th>Status<br><input type="text" id="searchInput8" onkeyup="searchTable()"></th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <!-- deklarasikan dan panggil koneksi database -->
                                            <tbody>
                                                <?php
                        $query = "SELECT * FROM tb_transaksi order by id_transaksi desc";
                        $tampil = $koneksi->query($query);
                        $no = 1;
                        while ($data = mysqli_fetch_array($tampil)) {
                            $status = $data['status'];
                        ?>
                                                <tr>
                                                    <td class="text-center"><?= $no++ ?></td>
                                                    <td><?= $data['nama_pemilik'] ?></td>
                                                    <td><?= $data['keterangan_pinjam'] ?></td>
                                                    <td><?= $data['peminjam'] ?></td>
                                                    <td><?= $data['no_identitas'] ?></td>
                                                    <td><?= $data['tanggal_pinjam'] ?></td>
                                                    <td><?= $data['tanggal_dikembalikan'] ?></td>
                                                    <td><?= $data['jumlah'] ?></td>
                                                    <td>
                                                        <?php if ($status == 'dipinjam') { ?>
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm d-sm-inline-block mb-3 mb-sm-1"
                                                            disabled>Dipinjam</button>
                                                        <?php } else { ?>
                                                        <button type="button"
                                                            class="btn btn-success btn-sm d-sm-inline-block mb-3 mb-sm-1"
                                                            disabled>Tersedia</button>
                                                        <?php } ?>
                                                    <td>

                                                        <!-- buat tombol edit hapus kembalikan -->
                                                        <?php if ($status == 'dipinjam') { ?>
                                                        <a href="operasi_pengembalian_data.php?id_transaksi=<?= $data['id_transaksi'] ?>"
                                                            class="btn btn-success btn-sm d-sm-inline-block mb-3 mb-sm-1"><i
                                                                class="fa fa-undo"></i>Kembalikan</a>
                                                        <?php } else { ?>

                                                        <a href="editdata_pinjam.php?id_transaksi=<?= $data['id_transaksi'] ?>"
                                                            class="btn btn-warning btn-sm d-sm-inline-block mb-3 mb-sm-1"><i
                                                                class="fa fa-edit"></i>Edit</a>

                                                        <a href="hapusdata_pinjam.php?id_transaksi=<?= $data['id_transaksi'] ?>"
                                                            class="btn btn-danger btn-sm d-sm-inline-block mb-3 mb-sm-1"
                                                            onclick="return confirm('Yakin ingin menghapus data ini?')"><i
                                                                class="fa fa-trash"></i>Hapus</a>
                                                        <?php } ?>

                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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