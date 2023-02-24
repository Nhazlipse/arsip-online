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
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="../pinjaman/dashboard.php"style="margin-top:68px;">
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
    <h6 class="collapse-header"><b>Pilih Menu:/b></h6>
    <a class="collapse-item" href="arsip.php"><b>Arsip</b></a>
    <a class="collapse-item" href="../pinjaman/pinjaman.php"><b>Pinjaman</b></a>
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

                <!-- JAVASCIRPT BUAT CARI DATA -->
                <script>
                function searchTable() {
                    var input1, input2, input3, input4, input5, input6, input7, input8, input9, input10, input11, input12, input13, filter1, filter2, filter3, filter4, filter5, filter6, filter7, filter8, filter9, filter10, filter11, filter12, filter13, table, tr, td1, td2, td3, td4, td5, td6, td7, td8, td9, td10, td11, td12, td13, i, txtValue1, txtValue2, txtValue3, txtValue4, txtValue5, txtValue6, txtValue7, txtValue8, txtValue9, txtValue10, txtValue11, txtValue12, txtValue13;
                    input1 = document.getElementById("searchInput1");
                    input2 = document.getElementById("searchInput2");
                    input3 = document.getElementById("searchInput3");
                    input4 = document.getElementById("searchInput4");
                    input5 = document.getElementById("searchInput5");
                    input6 = document.getElementById("searchInput6");
                    input7 = document.getElementById("searchInput7");
                    input8 = document.getElementById("searchInput8");
                    input9 = document.getElementById("searchInput9");
                    input10 = document.getElementById("searchInput10");
                    input11 = document.getElementById("searchInput11");
                    input12 = document.getElementById("searchInput12");
                    input13 = document.getElementById("searchInput13");

                    filter1 = input1.value.toUpperCase();
                    filter2 = input2.value.toUpperCase();
                    filter3 = input3.value.toUpperCase();
                    filter4 = input4.value.toUpperCase();
                    filter5 = input5.value.toUpperCase();
                    filter6 = input6.value.toUpperCase();
                    filter7 = input7.value.toUpperCase();
                    filter8 = input8.value.toUpperCase();
                    filter9 = input9.value.toUpperCase();
                    filter10 = input10.value.toUpperCase();
                    filter11 = input11.value.toUpperCase();
                    filter12 = input12.value.toUpperCase();
                    filter13 = input13.value.toUpperCase();

                    table = document.getElementById("dataTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td1 = tr[i].getElementsByTagName("td")[1]; // index kolom kedua, yaitu kolom nama
                        td2 = tr[i].getElementsByTagName("td")[2]; // index kolom ketiga, yaitu kolom masalah
                        td3 = tr[i].getElementsByTagName("td")[3]; // index kolom keempat, yaitu kolom peminjam
                        td4 = tr[i].getElementsByTagName("td")[4]; // index kolom keempat, yaitu kolom peminjam
                        td5 = tr[i].getElementsByTagName("td")[5]; // index kolom keempat, yaitu kolom peminjam
                        td6 = tr[i].getElementsByTagName("td")[6]; // index kolom keempat, yaitu kolom peminjam
                        td7 = tr[i].getElementsByTagName("td")[7]; // index kolom keempat, yaitu kolom peminjam
                        td8 = tr[i].getElementsByTagName("td")[8]; // index kolom keempat, yaitu kolom peminjam
                        td9 = tr[i].getElementsByTagName("td")[9]; // index kolom keempat, yaitu kolom peminjam
                        td10 = tr[i].getElementsByTagName("td")[10]; // index kolom keempat, yaitu kolom peminjam
                        td11 = tr[i].getElementsByTagName("td")[11]; // index kolom keempat, yaitu kolom peminjam
                        td12 = tr[i].getElementsByTagName("td")[12]; // index kolom keempat, yaitu kolom peminjam
                        td13 = tr[i].getElementsByTagName("td")[13]; // index kolom keempat, yaitu kolom peminjam
                        
                        if (td1 || td2 || td3 || td4 || td5 || td6 || td7 || td8 || td9 || td10 || td11 || td12 || td13) {
                            txtValue1 = td1.textContent || td1.innerText;
                            txtValue2 = td2.textContent || td2.innerText;
                            txtValue3 = td3.textContent || td3.innerText;
                            txtValue4 = td4.textContent || td4.innerText;
                            txtValue5 = td5.textContent || td5.innerText;
                            txtValue6 = td6.textContent || td6.innerText;
                            txtValue7 = td7.textContent || td7.innerText;
                            txtValue8 = td8.textContent || td8.innerText;
                            txtValue9 = td9.textContent || td9.innerText;
                            txtValue10 = td10.textContent || td10.innerText;
                            txtValue11 = td11.textContent || td11.innerText;
                            txtValue12 = td12.textContent || td12.innerText;
                            txtValue13 = td13.textContent || td13.innerText;


                            if (txtValue1.toUpperCase().indexOf(filter1) > -1 &&
                                txtValue2.toUpperCase().indexOf(filter2) > -1 &&
                                txtValue3.toUpperCase().indexOf(filter3) > -1 &&
                                txtValue4.toUpperCase().indexOf(filter4) > -1 &&
                                txtValue5.toUpperCase().indexOf(filter5) > -1 &&
                                txtValue6.toUpperCase().indexOf(filter6) > -1 &&
                                txtValue7.toUpperCase().indexOf(filter7) > -1 &&
                                txtValue8.toUpperCase().indexOf(filter8) > -1 &&
                                txtValue9.toUpperCase().indexOf(filter9) > -1 &&
                                txtValue10.toUpperCase().indexOf(filter10) > -1 &&
                                txtValue11.toUpperCase().indexOf(filter11) > -1 &&
                                txtValue12.toUpperCase().indexOf(filter12) > -1 &&
                                txtValue13.toUpperCase().indexOf(filter13) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
                </script>
                <!-- END JAVASCRIPT -->

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
                        <table class="table table-bordered" id="dataTable" width="262%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No. Urut</th>
                                    <th>Nama Pemilik<br><input type="text" id="searchInput1" onkeyup="searchTable()"></th>
                                    <th>Uraian Masalah<br><input type="text" id="searchInput2" onkeyup="searchTable()"></th>
                                    <th>Jalan<br><input type="text" id="searchInput3" onkeyup="searchTable()"></th>
                                    <th>Kelurahan<br><input type="text" id="searchInput4" onkeyup="searchTable()"></th>
                                    <th>Kecamatan<br><input type="text" id="searchInput5" onkeyup="searchTable()"></th>
                                    <th>Unit Pengolah<br><input type="text" id="searchInput6" onkeyup="searchTable()"></th>
                                    <th>No. Rak<br><input type="text" id="searchInput7" onkeyup="searchTable()"></th>
                                    <th>No. Box<br><input type="text" id="searchInput8" onkeyup="searchTable()"></th>
                                    <th>Kode Klas<br><input type="text" id="searchInput9" onkeyup="searchTable()"></th>
                                    <th>No. Urut<br><input type="text" id="searchInput10" onkeyup="searchTable()"></th>
                                    <th>NIPA<br><input type="text" id="searchInput11" onkeyup="searchTable()"></th>
                                    <th>Tahun<br><input type="text" id="searchInput12" onkeyup="searchTable()"></th>
                                    <th>Keterangan<br><input type="text" id="searchInput13" onkeyup="searchTable()"></th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <!-- deklarasikan dan panggil koneksi database -->
                            <tbody>
                                <?php
    $query = "SELECT * FROM tb_dataarsip order by id_dataarsip desc";
    $tampil = $koneksi->query($query);
    $no = 1;
    while ($data = mysqli_fetch_array($tampil)) {
    ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['masalah'] ?></td>
                                    <td><?= $data['jalan'] ?></td>
                                    <td><?= $data['kelurahan'] ?></td>
                                    <td><?= $data['kecamatan'] ?></td>
                                    <td><?= $data['unit_pengolah'] ?></td>
                                    <td><?= $data['no_rak'] ?></td>
                                    <td><?= $data['no_box'] ?></td>
                                    <td><?= $data['kode_klas'] ?></td>
                                    <td><?= $data['no_urut'] ?></td>
                                    <td><?= $data['nipa'] ?></td>
                                    <td><?= $data['tahun'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                    <td>

                                        <!-- buat tombol edit hapus -->
                                        <a href="editdata.php?id_dataarsip=<?= $data['id_dataarsip'] ?>"
                                            class="btn btn-warning btn-sm d-sm-inline-block mb-3 mb-sm-1"><i
                                                class="fa fa-edit"></i>Edit</a>
                                        <a href="hapusdata.php?id_dataarsip=<?= $data['id_dataarsip'] ?>"
                                            class="btn btn-danger btn-sm d-sm-inline-block mb-3 mb-sm-1"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')"><i
                                                class="fa fa-trash"></i>Hapus</a>

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