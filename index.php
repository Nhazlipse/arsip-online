<!DOCTYPE html>
<html lang="en">

<?php 
include 'header.php'; 
include './database/koneksi.php';
?>

<head>

    <title>Arsip Kita - Kediri</title>

</head>

<body class="bg-color-warning" style="background-image: url('./assets/img/bg_login.png'); background-repeat: no-repeat; background-position: center; background-size: cover ; width =">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-6">

                <div class="card o-hidden my-5">
                    <div class="card-body p-4">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        <div class="col-lg-6 d-lg-block bg-white p-6 text-center"><br>
                                <img src="./assets/img/arsip.png" width = "90%"><br><br><br>
                                <img src="./assets/img/tulisan.png"  width = "55%">
                            </div>

                            <div class="col-lg-5">
                                <div class="p-4">

                            </div>
                                    <div class="text-center"><br>
                                        <h1 class="h2 text-gray-900 mb-4" style="font-size:36px; font-family: bold; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Selamat Datang</h1><br>
                                    </div>
                                    <form class="user" action="./admin/login.php" method="POST">
                                    <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                            </div>
                                        </div>
                                        <button class="btn btn-warning btn-user btn-block" style="height:1,5cm;width:4cm;position:absolute;top:62%;left: 31%;font-size:18px;font-family:bold;">Login</button>
                                        </a>
                                        <br>
                                    </form>
                                    </br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>

<?php include 'footer.php'; ?>